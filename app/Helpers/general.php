<?php

use App\Models\Order;
use App\Models\VendorSetting;

function isRTL(): bool
{
    return app()->getLocale() == "ar" || setting('localeCode') == "ar";
}

function genFileName($file, $length = 5)
{
    $ext  = $file->extension();
    $name = \Str::random($length) . "-" . time() . "." . $ext;
    return $name;
}


//get vendor settings or default settings
function driverSearchRadius(Order $order = null)
{

    if ($order == null || empty($order->vendor_id)) {
        return setting('driverSearchRadius', 10);
    }
    //
    $vendorSetting = VendorSetting::where('vendor_id', $order->vendor_id)->first();
    if (empty($vendorSetting)) {
        return setting('driverSearchRadius', 10);
    } else {
        $settings = json_decode($vendorSetting->settings, true) ?? [];
        return $settings['driver_search_radius'] ?? setting('driverSearchRadius', 10);
    }
}


function maxDriverOrderAtOnce(Order $order = null, $default = 1)
{
    if ($order == null || empty($order->vendor_id)) {
        return setting('maxDriverOrderAtOnce', $default);
    }
    //
    $vendorSetting = VendorSetting::where('vendor_id', $order->vendor_id)->first();
    if (empty($vendorSetting)) {
        return setting('maxDriverOrderAtOnce', $default);
    } else {
        $settings = json_decode($vendorSetting->settings, true) ?? [];
        return $settings['max_driver_order_at_once'] ?? setting('maxDriverOrderAtOnce', $default);
    }
}


function maxDriverOrderNotificationAtOnce(Order $order = null, $default = 1)
{
    if ($order == null || empty($order->vendor_id)) {
        return setting('maxDriverOrderNotificationAtOnce', $default);
    }
    //
    $vendorSetting = VendorSetting::where('vendor_id', $order->vendor_id)->first();
    if (empty($vendorSetting)) {
        return setting('maxDriverOrderNotificationAtOnce', $default);
    } else {
        $settings = json_decode($vendorSetting->settings, true) ?? [];
        return $settings['max_driver_order_notification_at_once'] ?? setting('maxDriverOrderNotificationAtOnce', $default);
    }
}


function isMediaImage($media)
{
    return in_array($media->mime_type, ['image/jpeg', 'image/png', 'image/jpg', 'image/gif']);
}
