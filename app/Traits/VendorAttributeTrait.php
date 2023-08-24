<?php

namespace App\Traits;

trait VendorAttributeTrait
{
    use GoogleMapApiTrait;

    //TAX
    public function getTaxAttribute($value)
    {
        return ($value != null && $value != "") ? $value : (string) setting('finance.generalTax', 0);
    }

    public function getMinOrderAttribute($value)
    {
        return ($value != null && $value != "") ? $value : setting('finance.minOrderAmount', 0);
    }

    public function getMaxOrderAttribute($value)
    {
        return ($value != null && $value != "") ? $value : setting('finance.maxOrderAmount', 10000000);
    }
    //


    public function getChargePerKmAttribute($value)
    {
        return (int) (($value != null && $value != "") ? $value : (int) setting('finance.delivery.charge_per_km', 0));
    }

    public function getBaseDeliveryFeeAttribute($value)
    {
        return ($value != null && $value != "") ? $value : (float) setting('finance.delivery.base_delivery_fee', 0);
    }

    public function getDeliveryFeeAttribute($value)
    {
        return ($value != null && $value != "") ? $value : (float) setting('finance.delivery.delivery_fee', 0);
    }

    public function getDeliveryRangeAttribute($value)
    {
        return ($value != null && $value != "") ? $value : (float) setting('finance.delivery.delivery_range', 0);
    }


    //
    public function fees()
    {
        return $this->belongsToMany('App\Models\Fee')->active()->using('App\Models\FeeVendorPivot');
    }

    public function plain_fees()
    {
        return $this->belongsToMany('App\Models\Fee');
    }


    public function scopeByDeliveryZone($query, $latitude, $longitude)
    {
        //filter by location
        if ((bool) setting('enableFatchByLocation')) {
            $deliveryZonesIds = $this->getDeliveryZonesByLocation($latitude, $longitude);
            return $query->whereHas("delivery_zones", function ($query) use ($deliveryZonesIds) {
                $query->whereIn('delivery_zone_id', $deliveryZonesIds);
            })->orWhereDoesntHave("delivery_zones");
        }
        //no filter by location
        return $query;
    }
}
