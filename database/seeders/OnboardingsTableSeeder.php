<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OnboardingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('onboardings')->delete();
        
        \DB::table('onboardings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'in_order' => 3,
                'title' => 'Struggling to choose a vendor for your needs?',
                'description' => 'Take advantage of our convenient platform and find what fits your needs without breaking a sweat! Enjoy browsing through different vendors from the comfort of your own home.',
                'type' => 'customer',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:30:25',
                'updated_at' => '2022-08-15 20:31:32',
            ),
            1 => 
            array (
                'id' => 2,
                'in_order' => 1,
                'title' => 'Need to get from A to B fast, cheap and reliable?',
                'description' => 'Look no further because our platform is the best way to go. Our rides are affordable, dependable and incredibly convenient. Tap away and let us take you where you need to be. #OrderARideToday',
                'type' => 'customer',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:30:52',
                'updated_at' => '2022-08-15 20:30:52',
            ),
            2 => 
            array (
                'id' => 3,
                'in_order' => 2,
                'title' => 'Delivery made easy',
                'description' => "Whether it's groceries or your online purchase – leave the hassle of arranging last-mile delivery to us. Enjoy lightning-fast, secure delivery with our platform because convenience should come quick!⁣",
                'type' => 'customer',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:31:11',
                'updated_at' => '2022-08-15 20:31:32',
            ),
            3 => 
            array (
                'id' => 4,
                'in_order' => 1,
                'title' => 'Delivery made easy',
                'description' => 'Get notified as soon as an order is available for delivery',
                'type' => 'driver',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:35:14',
                'updated_at' => '2022-08-15 20:35:14',
            ),
            4 => 
            array (
                'id' => 5,
                'in_order' => 1,
                'title' => 'Chat with vendor/customer',
                'description' => 'Call/Chat with vendor/customer for more info or update regarding assigned order(s)',
                'type' => 'driver',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:35:35',
                'updated_at' => '2022-08-15 20:35:35',
            ),
            5 => 
            array (
                'id' => 6,
                'in_order' => 1,
                'title' => 'Earning',
                'description' => 'No more waiting for your paycheck - now you can earn on the go with our platform! Get ready to be your own boss and start racking up those commissions today.',
                'type' => 'driver',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:35:58',
                'updated_at' => '2022-08-15 20:35:58',
            ),
            6 => 
            array (
                'id' => 7,
                'in_order' => 1,
                'title' => 'Take Orders',
                'description' => "Are you missing out on order notifications?

Say goodbye to lost orders with our platform - where you'll get notified as soon as an order is placed with you!

With our easy-to-use platform, never miss another sale by getting notified immediately. Get peace of mind knowing that all your orders are accounted for and taken care of.

Start managing your orders the smart way with our platform. Sign up now to get notifcations no matter when an order is placed!",
                'type' => 'vendor',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:36:53',
                'updated_at' => '2022-08-15 20:36:53',
            ),
            7 => 
            array (
                'id' => 8,
                'in_order' => 1,
                'title' => 'Chat with driver/customer',
                'description' => 'Call/Chat with driver/customer for more info or update regarding assigned order(s)',
                'type' => 'vendor',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:37:12',
                'updated_at' => '2022-08-15 20:37:12',
            ),
            8 => 
            array (
                'id' => 9,
                'in_order' => 1,
                'title' => 'Earning',
                'description' => "Ready to watch your earnings skyrocket?

We’ve got just the thing for you! With our platform, take control of your financial future by taking advantage of the growing demand in the market.

Our service helps you create a passive income stream and unlocks new opportunities you never knew existed. Plus, you get to benefit from our exclusive support and guidance every step of the way.

So don’t wait! See your earnings increase with our platform – let’s do this.",
                'type' => 'vendor',
                'is_active' => 1,
                'created_at' => '2022-08-15 20:37:27',
                'updated_at' => '2022-08-15 20:37:27',
            ),
        ));

        //assigning the image
        
        
    }
}