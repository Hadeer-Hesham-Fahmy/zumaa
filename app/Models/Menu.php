<?php

namespace App\Models;

use App\Traits\HasTranslations;

class Menu extends BaseModel
{

    use HasTranslations;
    public $translatable = ['name'];
    
    protected $fillable = [
        "id","name","vendor_id","is_active"
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

}