<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\OptionGroup;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {

        if ($request->type == "vendor") {
            return Product::with("categories", "sub_categories", "menus")->inorder()->whereHas('vendor', function ($query) use ($request) {
                return $query->where('vendor_id', "=", auth('api')->user()->vendor_id ?? 0);
            })
                ->when($request->keyword, function ($query) use ($request) {
                    return $query->where('name', "like", "%" . $request->keyword . "%")
                        ->orWhere('barcode', "like", "%" . $request->keyword);
                })->latest()->paginate($this->perPage);
        }
        return Product::active()
            ->when($request->vendor_type_id, function ($query) use ($request) {
                return $query->whereHas('vendor', function ($query) use ($request) {
                    return $query->active()->where('vendor_type_id', $request->vendor_type_id);
                });
            })
            ->when($request->vendor_id, function ($query) use ($request) {
                return $query->active()->where('vendor_id', $request->vendor_id);
            })
            ->inorder()->when($request->type == "best", function ($query) {
                return $query->withCount('sales')->orderBy('sales_count', 'DESC');
            })
            ->when($request->keyword, function ($query) use ($request) {
                return $query->where('name', "like", "%" . $request->keyword . "%")
                    ->orWhere('barcode', "like", "%" . $request->keyword);
            })
            ->when($request->category_id, function ($query) use ($request) {
                return $query->whereHas('categories', function ($query) use ($request) {
                    return $query->where('category_id', $request->category_id);
                });
            })
            //show products tied to a certain sub cateogry
            ->when($request->sub_category_id, function ($query) use ($request) {
                return $query->whereHas('sub_categories', function ($query) use ($request) {
                    return $query->where('subcategory_id', $request->sub_category_id);
                });
            })
            //show products tied to a certain menu
            ->when($request->menu_id, function ($query) use ($request) {
                return $query->whereHas('menus', function ($query) use ($request) {
                    return $query->where('menu_id', $request->menu_id);
                });
            })
            ->when($request->is_open, function ($query) use ($request) {
                return $query->where('is_open', "=", $request->is_open);
            })
            ->when($request->type == "you", function ($query) {

                if (auth('sanctum')->user()) {
                    return $query->whereHas('purchases')->withCount('purchases')->orderBy('purchases_count', 'DESC');
                } else {
                    return $query->inRandomOrder();
                }
            })
            // NEW ONES
            ->when($request->type == "flash", function ($query) {
                return $query->where('discount_price', ">", 0)->orderBy('discount_price', 'DESC');
            })
            ->when($request->type == "new", function ($query) {
                return $query->orderBy('created_at', 'DESC');
            })
            // NEW ONES END HERE
            ->when($request->latitude, function ($query) use ($request) {
                return $query->whereHas('vendor', function ($query) use ($request) {
                    return $query->byDeliveryZone($request->latitude, $request->longitude);
                });

                // return $query->where(function ($query) use ($request) {
                //     return $query->whereHas('vendor', function ($query) use ($request) {
                //         return $query->active()->within($request->latitude, $request->longitude);
                //     })->orWhereHas('vendor', function ($query) use ($request) {
                //         return $query->active()->withinrange($request->latitude, $request->longitude);
                //     });
                // });
            })
            ->paginate($this->perPage);
    }

    public function show(Request $request, $id)
    {

        try {

            $optionGroupIds = Option::whereHas('products', function ($query) use ($id) {
                return $query->where('product_id', "=", $id);
            })->pluck('option_group_id');
            //
            $optionGroups = OptionGroup::active()->with(['options' => function ($query) use ($id) {
                $query->whereHas('products', function ($query) use ($id) {
                    return $query->where('product_id', "=", $id);
                });
            }])->whereIn('id', $optionGroupIds)->get();

            $product = Product::findorfail($id);
            $product["option_groups"] = $optionGroups;
            return $product;
        } catch (\Exception $ex) {
            return response()->json([
                "message" => $ex->getMessage() ?? __("No Product Found")
            ], 400);
        }
    }

    public function store(Request $request)
    {

        $user = User::find(auth('api')->id());
        //
        if (!$user->hasAnyRole('manager') || $user->vendor_id != $request->vendor_id) {
            return response()->json([
                "message" => __("You are not allowed to perform this operation")
            ], 400);
        }

        try {
            \DB::beginTransaction();
            $product = Product::create($request->all());
            $product->deliverable = $request->deliverable == 1 || $request->deliverable == "true";
            $product->is_active = $request->is_active == 1 || $request->is_active == "true";
            $product->save();

            //categories
            if ($request->has("category_ids") && $request->category_ids != "[]") {
                $product->categories()->attach($request->category_ids);
            }
            //sub_category_ids
            if ($request->has("sub_category_ids") && $request->sub_category_ids != "[]") {
                $product->sub_categories()->attach($request->sub_category_ids);
            }
            //menus
            if ($request->has("menu_ids") && $request->menu_ids != "[]") {
                $product->menus()->attach($request->menu_ids);
            }


            if ($request->hasFile("photo")) {
                $product->clearMediaCollection();
                $product->addMedia($request->photo->getRealPath())
                    ->usingFileName(genFileName($request->photo))
                    ->toMediaCollection();
            }

            if ($request->hasFile("photos")) {
                $product->clearMediaCollection();
                foreach ($request->file('photos') as $photo) {
                    $product->addMedia($photo->getRealPath())
                        ->usingFileName(genFileName($request->photo))
                        ->toMediaCollection();
                }
            }

            \DB::commit();
            return response()->json([
                "message" => __("Product Added successfully")
            ], 200);
        } catch (\Exception $ex) {
            \DB::rollback();
            return response()->json([
                "message" => $ex->getMessage() ?? __("Product Creation failed")
            ], 400);
        }
    }

    public function update(Request $request, $id)
    {


        try {

            $product = Product::find($id);
            $user = User::find(auth('api')->id());
            //
            if (!$user->hasAnyRole('manager') || $user->vendor_id != $product->vendor_id) {
                return response()->json([
                    "message" => __("You are not allowed to perform this operation")
                ], 400);
            }

            \DB::beginTransaction();
            $product->update($request->all());

            //categories
            if ($request->has("category_ids") && $request->category_ids != "[]") {
                $categoryIds = collect($request->input('category_ids'));
                //first detach all categories
                $product->categories()->detach();
                //then attach the new ones
                if ($categoryIds->isNotEmpty()) {
                    $product->categories()->attach($categoryIds);
                }
            }
            //sub_category_ids
            if ($request->has("sub_category_ids") && $request->sub_category_ids != "[]") {
                $subCategoryIds = collect($request->input('sub_category_ids'));
                $product->sub_categories()->detach();
                if ($subCategoryIds->isNotEmpty()) {
                    $product->sub_categories()->attach($subCategoryIds);
                }
            }
            //menus
            //if no menu_ids are passed, skip this step
            if ($request->has("menu_ids") && $request->menu_ids != "[]") {
                $menuIds = collect($request->input('menu_ids'));
                $product->menus()->detach();
                if ($menuIds->isNotEmpty()) {
                    $product->menus()->attach($menuIds);
                }
            }

            if ($request->hasFile("photo")) {
                $product->clearMediaCollection();
                $product->addMedia($request->photo->getRealPath())
                    ->usingFileName(genFileName($request->photo))
                    ->toMediaCollection();
            }

            if ($request->hasFile("photos")) {
                $product->clearMediaCollection();
                foreach ($request->file('photos') as $photo) {
                    $product->addMedia($photo->getRealPath())
                        ->usingFileName(genFileName($request->photo))
                        ->toMediaCollection();
                }
            }


            \DB::commit();

            return response()->json([
                "message" => __("Product updated successfully"),
            ]);
        } catch (\Exception $ex) {
            \DB::rollback();
            return response()->json([
                "message" => $ex->getMessage()
            ], 400);
        }
    }

    public function destroy($id)
    {

        $product = Product::find($id);
        $user = User::find(auth('api')->id());
        //
        if (!$user->hasAnyRole('manager') || $user->vendor_id != $product->vendor_id) {
            return response()->json([
                "message" => __("You are not allowed to perform this operation")
            ], 400);
        }

        try {

            \DB::beginTransaction();
            Product::destroy($id);
            \DB::commit();

            return response()->json([
                "message" => __("Product deleted successfully"),
            ]);
        } catch (\Exception $ex) {
            \DB::rollback();
            return response()->json([
                "message" => $ex->getMessage()
            ], 400);
        }
    }
}
