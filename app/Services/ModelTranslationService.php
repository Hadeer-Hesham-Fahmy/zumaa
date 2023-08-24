<?php

namespace App\Services;


use App\Models\Category;
use App\Models\Fee;
use App\Models\Menu;
use App\Models\Onboarding;
use App\Models\PackageType;
use App\Models\Product;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\Tag;
use App\Models\VendorType;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ModelTranslationService
{
    public function fixTranslations()
    {
        //list of models that have translations
        //translate models
        $tables = ["vendor_types", "products", "fees", "menus", "categories", "subcategories", "onboardings", "services", "tags", "package_types"];
        $columns = ["title", 'name', "description"];
        $columnShifteds = ["title_shifted", 'name_shifted', "description_shifted"];
        $models = [
            VendorType::class, Product::class, Fee::class, Menu::class, Category::class, Subcategory::class, Onboarding::class, Service::class,
            Tag::class, PackageType::class,
        ];

        //
        foreach ($tables as $key => $table) {
            $model = $models[$key];

            foreach ($columns as $cKey => $column) {
                $columnShifted = $columnShifteds[$cKey];
                //
                if (Schema::hasColumn($table, $column)) {

                    //check if table column is already translated
                    $foundModel = $model::first();
                    $columnValue = $foundModel != null ? ($foundModel->getRawOriginal($column) ?? "") : "";
                    $alreadyTranslated = !empty($columnValue) && (strpos($columnValue, "{\"en\":") !== false);

                    if ($alreadyTranslated) {
                        logger("Already translated", [$table, $column]);
                        continue;
                    }


                    Schema::table($table, function ($table) use ($column, $columnShifted) {
                        $table->text($column)->change();
                    });
                    //add shited column if not exist
                    if (!Schema::hasColumn($table, $columnShifted)) {
                        Schema::table($table, function ($table) use ($columnShifted) {
                            $table->text($columnShifted);
                        });
                        logger("table create column", [$table, $columnShifted]);
                    } else {
                        logger("table has column", [$table, $columnShifted]);
                    }

                    //copy from $cloumn to $columnShifted
                    $model::whereNotNull('id')->update([
                        $columnShifted => DB::raw($column),
                    ]);


                    //copy the translate formated value back to right column
                    $model::whereNotNull('id')->update([
                        $column => DB::raw("CONCAT('{\"en\":\"',$columnShifted,'\"}')"),
                    ]);


                    //delete shifted column
                    Schema::table($table, function ($table) use ($columnShifted) {
                        $table->dropColumn($columnShifted);
                    });
                }
            }

            //
        }
    }
}
