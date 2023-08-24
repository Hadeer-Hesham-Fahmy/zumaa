<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 2,
                'key' => 'currencyCode',
                'value' => 'USD',
            ),
            1 => 
            array (
                'id' => 3,
                'key' => 'currency',
                'value' => '$',
            ),
            2 => 
            array (
                'id' => 4,
                'key' => 'currencyCountryCode',
                'value' => 'US',
            ),
            3 => 
            array (
                'id' => 11,
                'key' => 'appColorTheme.accentColor',
                'value' => '#854af2',
            ),
            4 => 
            array (
                'id' => 12,
                'key' => 'appColorTheme.primaryColor',
                'value' => '#6019eb',
            ),
            5 => 
            array (
                'id' => 13,
                'key' => 'appColorTheme.primaryColorDark',
                'value' => '#5723b8',
            ),
            6 => 
            array (
                'id' => 14,
                'key' => 'appColorTheme.onboarding1Color',
                'value' => '#F9F9F9',
            ),
            7 => 
            array (
                'id' => 15,
                'key' => 'appColorTheme.onboarding2Color',
                'value' => '#F6EFEE',
            ),
            8 => 
            array (
                'id' => 16,
                'key' => 'appColorTheme.onboarding3Color',
                'value' => '#FFFBFC',
            ),
            9 => 
            array (
                'id' => 17,
                'key' => 'appColorTheme.onboardingIndicatorDotColor',
                'value' => '#30C0D9',
            ),
            10 => 
            array (
                'id' => 18,
                'key' => 'appColorTheme.onboardingIndicatorActiveDotColor',
                'value' => '#21a179',
            ),
            11 => 
            array (
                'id' => 19,
                'key' => 'appColorTheme.openColor',
                'value' => '#00FF00',
            ),
            12 => 
            array (
                'id' => 20,
                'key' => 'appColorTheme.closeColor',
                'value' => '#FF0000',
            ),
            13 => 
            array (
                'id' => 21,
                'key' => 'appColorTheme.deliveryColor',
                'value' => '#FFBF00',
            ),
            14 => 
            array (
                'id' => 22,
                'key' => 'appColorTheme.pickupColor',
                'value' => '#0000FF',
            ),
            15 => 
            array (
                'id' => 23,
                'key' => 'appColorTheme.ratingColor',
                'value' => '#FFBF00',
            ),
            16 => 
            array (
                'id' => 24,
                'key' => 'appColorTheme.pendingColor',
                'value' => '#0099FF',
            ),
            17 => 
            array (
                'id' => 25,
                'key' => 'appColorTheme.preparingColor',
                'value' => '#0000FF',
            ),
            18 => 
            array (
                'id' => 26,
                'key' => 'appColorTheme.enrouteColor',
                'value' => '#00FF00',
            ),
            19 => 
            array (
                'id' => 27,
                'key' => 'appColorTheme.failedColor',
                'value' => '#FF0000',
            ),
            20 => 
            array (
                'id' => 28,
                'key' => 'appColorTheme.cancelledColor',
                'value' => '#808080',
            ),
            21 => 
            array (
                'id' => 29,
                'key' => 'appColorTheme.deliveredColor',
                'value' => '#01A368',
            ),
            22 => 
            array (
                'id' => 30,
                'key' => 'appColorTheme.successfulColor',
                'value' => '#01A368',
            ),
            23 => 
            array (
                'id' => 31,
                'key' => 'serviceKeyPath',
                'value' => '',
            ),
            24 => 
            array (
                'id' => 32,
                'key' => 'appName',
                'value' => 'Glover',
            ),
            25 => 
            array (
                'id' => 33,
                'key' => 'websiteName',
                'value' => 'Glover',
            ),
            26 => 
            array (
                'id' => 34,
                'key' => 'countryCode',
                'value' => 'AUTO,US',
            ),
            27 => 
            array (
                'id' => 35,
                'key' => 'websiteLogo',
                'value' => '',
            ),
            28 => 
            array (
                'id' => 36,
                'key' => 'favicon',
                'value' => '',
            ),
            29 => 
            array (
                'id' => 37,
                'key' => 'loginImage',
                'value' => '',
            ),
            30 => 
            array (
                'id' => 38,
                'key' => 'registerImage',
                'value' => '',
            ),
            31 => 
            array (
                'id' => 39,
                'key' => 'appVerisonCode',
                'value' => '59',
            ),
            32 => 
            array (
                'id' => 40,
                'key' => 'appVerison',
                'value' => '1.7.00',
            ),
            33 => 
            array (
                'id' => 41,
                'key' => 'otpGateway',
                'value' => 'None',
            ),
            34 => 
            array (
                'id' => 42,
                'key' => 'appCountryCode',
                'value' => 'AUTO,US',
            ),
            35 => 
            array (
                'id' => 43,
                'key' => 'enableGoogleDistance',
                'value' => '0',
            ),
            36 => 
            array (
                'id' => 44,
                'key' => 'enableSingleVendor',
                'value' => '0',
            ),
            37 => 
            array (
                'id' => 45,
                'key' => 'enableProofOfDelivery',
                'value' => '0',
            ),
            38 => 
            array (
                'id' => 46,
                'key' => 'enableDriverWallet',
                'value' => '1',
            ),
            39 => 
            array (
                'id' => 47,
                'key' => 'driverWalletRequired',
                'value' => '0',
            ),
            40 => 
            array (
                'id' => 48,
                'key' => 'vendorEarningEnabled',
                'value' => '1',
            ),
            41 => 
            array (
                'id' => 49,
                'key' => 'alertDuration',
                'value' => '30',
            ),
            42 => 
            array (
                'id' => 50,
                'key' => 'dricearchRadius',
                'value' => '20',
            ),
            43 => 
            array (
                'id' => 51,
                'key' => 'maxDriverOrderAtOnce',
                'value' => '3',
            ),
            44 => 
            array (
                'id' => 52,
                'key' => 'maxDriverOrderNotificationAtOnce',
                'value' => '10',
            ),
            45 => 
            array (
                'id' => 53,
                'key' => 'clearRejectedAutoAssignment',
                'value' => '0',
            ),
            46 => 
            array (
                'id' => 54,
                'key' => 'enableGroceryMode',
                'value' => '0',
            ),
            47 => 
            array (
                'id' => 55,
                'key' => 'enableReferSystem',
                'value' => '1',
            ),
            48 => 
            array (
                'id' => 56,
                'key' => 'enableChat',
                'value' => '1',
            ),
            49 => 
            array (
                'id' => 57,
                'key' => 'enableOrderTracking',
                'value' => '1',
            ),
            50 => 
            array (
                'id' => 58,
                'key' => 'enableParcelVendorByLocation',
                'value' => '0',
            ),
            51 => 
            array (
                'id' => 59,
                'key' => 'webviewDirection',
                'value' => 'ltr',
            ),
            52 => 
            array (
                'id' => 60,
                'key' => 'referRewardAmount',
                'value' => '10',
            ),
            53 => 
            array (
                'id' => 61,
                'key' => 'enableParcelMultipleStops',
                'value' => '1',
            ),
            54 => 
            array (
                'id' => 62,
                'key' => 'maxParcelStops',
                'value' => '3',
            ),
            55 => 
            array (
                'id' => 63,
                'key' => 'what3wordsApiKey',
                'value' => '',
            ),
            56 => 
            array (
                'id' => 64,
                'key' => 'websiteHeaderTitle',
                'value' => 'BEST OFFER',
            ),
            57 => 
            array (
                'id' => 65,
                'key' => 'websiteHeaderSubtitle',
                'value' => 'Best food offer from anywhere in Ghana',
            ),
            58 => 
            array (
                'id' => 66,
                'key' => 'websiteHeaderImage',
                'value' => '',
            ),
            59 => 
            array (
                'id' => 67,
                'key' => 'social.fbLink',
                'value' => '',
            ),
            60 => 
            array (
                'id' => 68,
                'key' => 'social.igLink',
                'value' => '',
            ),
            61 => 
            array (
                'id' => 69,
                'key' => 'social.twLink',
                'value' => '',
            ),
            62 => 
            array (
                'id' => 70,
                'key' => 'websiteColor',
                'value' => '#5f19eb',
            ),
            63 => 
            array (
                'id' => 71,
                'key' => 'locale',
                'value' => 'English',
            ),
            64 => 
            array (
                'id' => 72,
                'key' => 'localeCode',
                'value' => 'en',
            ),
            65 => 
            array (
                'id' => 73,
                'key' => 'timeZone',
                'value' => 'Africa/Accra',
            ),
            66 => 
            array (
                'id' => 74,
                'key' => 'maxScheduledDay',
                'value' => '5',
            ),
            67 => 
            array (
                'id' => 75,
                'key' => 'maxScheduledTime',
                'value' => '2',
            ),
            68 => 
            array (
                'id' => 76,
                'key' => 'minScheduledTime',
                'value' => '2',
            ),
            69 => 
            array (
                'id' => 77,
                'key' => 'autoCancelPendingOrderTime',
                'value' => '90',
            ),
            70 => 
            array (
                'id' => 78,
                'key' => 'defaultVendorRating',
                'value' => '5',
            ),
            71 => 
            array (
                'id' => 79,
                'key' => 'apiKey',
                'value' => '',
            ),
            72 => 
            array (
                'id' => 80,
                'key' => 'projectId',
                'value' => '',
            ),
            73 => 
            array (
                'id' => 81,
                'key' => 'messagingSenderId',
                'value' => '',
            ),
            74 => 
            array (
                'id' => 82,
                'key' => 'appId',
                'value' => '',
            ),
            75 => 
            array (
                'id' => 83,
                'key' => 'vapidKey',
                'value' => '',
            ),
            76 => 
            array (
                'id' => 84,
                'key' => 'notifyAdmin',
                'value' => '1',
            ),
            77 => 
            array (
                'id' => 85,
                'key' => 'notifyCityAdmin',
                'value' => '1',
            ),
            78 => 
            array (
                'id' => 86,
                'key' => 'billzCollectionId',
                'value' => 'ycm02ozk',
            ),
            79 => 
            array (
                'id' => 87,
                'key' => 'serverFBAuthToken',
                'value' => '',
            ),
            80 => 
            array (
                'id' => 88,
                'key' => 'serverFBAuthTokenExpiry',
                'value' => '',
            ),
            81 => 
            array (
                'id' => 89,
                'key' => 'websiteFooterBrief',
                'value' => 'Best mobile app for food delivery',
            ),
            82 => 
            array (
                'id' => 90,
                'key' => 'websiteFooterImage',
                'value' => '',
            ),
            83 => 
            array (
                'id' => 91,
                'key' => 'privacyPolicy',
                'value' => '',
            ),
            84 => 
            array (
                'id' => 92,
                'key' => 'contactInfo',
                'value' => '',
            ),
            85 => 
            array (
                'id' => 93,
                'key' => 'terms',
                'value' => '',
            ),
            86 => 
            array (
                'id' => 94,
                'key' => 'androidDownloadLink',
                'value' => '',
            ),
            87 => 
            array (
                'id' => 95,
                'key' => 'iosDownloadLink',
                'value' => '',
            ),
            88 => 
            array (
                'id' => 96,
                'key' => 'emergencyContact',
                'value' => '911',
            ),
            89 => 
            array (
                'id' => 97,
                'key' => 'driversCommission',
                'value' => '12',
            ),
            90 => 
            array (
                'id' => 98,
                'key' => 'vendorsCommission',
                'value' => '20',
            ),
            91 => 
            array (
                'id' => 99,
                'key' => 'taxi.cancelPendingTaxiOrderTime',
                'value' => '15',
            ),
            92 => 
            array (
                'id' => 100,
                'key' => 'taxi.msg.pending',
                'value' => 'Searching for driver',
            ),
            93 => 
            array (
                'id' => 101,
                'key' => 'taxi.msg.preparing',
                'value' => 'Driver assigned to your trip',
            ),
            94 => 
            array (
                'id' => 102,
                'key' => 'taxi.msg.ready',
                'value' => 'Driver arrived at your pickup location',
            ),
            95 => 
            array (
                'id' => 103,
                'key' => 'taxi.msg.enroute',
                'value' => 'Trip started',
            ),
            96 => 
            array (
                'id' => 104,
                'key' => 'taxi.msg.completed',
                'value' => 'Trip completed',
            ),
            97 => 
            array (
                'id' => 105,
                'key' => 'taxi.msg.cancelled',
                'value' => 'Trip cancelled',
            ),
            98 => 
            array (
                'id' => 106,
                'key' => 'taxi.msg.failed',
                'value' => 'Trip Failed',
            ),
            99 => 
            array (
                'id' => 107,
                'key' => 'clearFirestore',
                'value' => '1',
            ),
            100 => 
            array (
                'id' => 108,
                'key' => 'taxi.drivingSpeed',
                'value' => '50',
            ),
            101 => 
            array (
                'id' => 109,
                'key' => 'enableOTPLogin',
                'value' => '0',
            ),
            102 => 
            array (
                'id' => 110,
                'key' => 'enableUploadPrescription',
                'value' => '1',
            ),
        ));
        
        
    }
}