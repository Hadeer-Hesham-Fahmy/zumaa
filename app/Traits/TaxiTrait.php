<?php

namespace App\Traits;

use App\Models\VehicleType;
use Illuminate\Support\Facades\Http;

trait TaxiTrait
{
    use GoogleMapApiTrait;

    public function getTaxiOrderTotalPrice($vehicleType, $pickup, $dropoff)
    {

        //distance of trip
        $distance = $this->getRelativeDistance($pickup, $dropoff);
        $drivingSpeed = setting("taxi.drivingSpeed", 50);
        //calculate the driving time and convert to minutes from hours
        $drivingTime = ($distance / $drivingSpeed) * 60;

        $timeFare = $vehicleType->time_fare * $drivingTime;
        $distanceFare = $distance * $vehicleType->distance_fare;
        $totalTripFare = $vehicleType->base_fare + $timeFare + $distanceFare;
        //if the total amount is less than the set minimum fare by admin, then the min_fare should be used then
        if ($totalTripFare < $vehicleType->min_fare) {
            return $vehicleType->min_fare;
        } else {
            return  $totalTripFare;
        }
    }

    public function getRecalculatedTaxiOrderTotalPrice($order)
    {

        if (!((bool) setting('taxi.recalculateFare', false))) {
            return $order->total;
        }
        //
        $pickup = $order->taxi_order->pickup_latitude . "," . $order->taxi_order->pickup_longitude;
        $dropoff = $order->taxi_order->dropoff_latitude . "," . $order->taxi_order->dropoff_longitude;
        //get dropoff location from request
        if (request()->latlng) {
            $dropoff = request()->latlng;
        }
        //distance of trip
        $distance = $this->getRelativeDistance($pickup, $dropoff);
        $drivingSpeed = setting("taxi.drivingSpeed", 50);
        //calculate the driving time and convert to minutes from hours
        $drivingTime = ($distance / $drivingSpeed) * 60;
        //check for the total new time for the trip
        $newDrivingTime = now()->diffInMinutes($order->getOriginal('updated_at'));
        // //check if 
        // if (setting("taxi.drivingSpeed", 50)) {
        //     if ($drivingTime < $newDrivingTime) {
        //         $drivingTime = $newDrivingTime;
        //     }
        // } else {
        //     $drivingTime = $newDrivingTime;
        // }

        //
        $drivingTime = $newDrivingTime;

        $vehicleType = VehicleType::find($order->taxi_order->vehicle_type_id);
        $timeFare = $vehicleType->time_fare * $drivingTime;
        $distanceFare = $distance * $vehicleType->distance_fare;
        $totalTripFare = $vehicleType->base_fare + $timeFare + $distanceFare;
        //if the total amount is less than the set minimum fare by admin, then the min_fare should be used then
        if ($totalTripFare < $vehicleType->min_fare) {
            return $vehicleType->min_fare;
        } else {
            return  $totalTripFare;
        }
    }
}
