<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{

    public function index(Request $request)
    {
        if (!empty($request->flash_sale_id)) {
            $result = FlashSaleItem::with('item')->whereFlashSaleId($request->flash_sale_id)->get();
        } else {
            $result = FlashSale::when($request->vendor_type_id, function ($query) use ($request) {
                return $query->where("vendor_type_id", $request->vendor_type_id);
            })->active()->notexpired()->get();
        }
        return response()->json($result, 200);
    }
}
