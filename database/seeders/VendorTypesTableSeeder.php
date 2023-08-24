<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_types')->delete();
        
        \DB::table('vendor_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Parcel Delivery',
                'color' => '#8c28f0',
                'description' => 'Send parcel to people',
                'slug' => 'parcel',
                'is_active' => 1,
                'created_at' => '2021-06-30 10:45:53',
                'updated_at' => '2022-03-19 06:45:43',
                'deleted_at' => NULL,
                'in_order' => 7,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Food Delivery ',
                'color' => '#97b500',
                'description' => 'Buy the best meal from your nearby restaurant',
                'slug' => 'food',
                'is_active' => 1,
                'created_at' => '2021-06-30 10:45:53',
                'updated_at' => '2022-03-19 16:07:58',
                'deleted_at' => NULL,
                'in_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Grocery',
                'color' => '#45b12f',
                'description' => 'buy grocery from your nearby markets',
                'slug' => 'grocery',
                'is_active' => 1,
                'created_at' => '2021-06-30 13:59:15',
                'updated_at' => '2022-03-19 06:37:07',
                'deleted_at' => NULL,
                'in_order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pharmacy',
                'color' => '#79dde1',
                'description' => 'buy drugs for your sickness and get it delivered directly to your doorstep',
                'slug' => 'pharmacy',
                'is_active' => 1,
                'created_at' => '2021-06-30 14:01:27',
                'updated_at' => '2022-03-19 06:45:27',
                'deleted_at' => NULL,
                'in_order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Services',
                'color' => '#00bfff',
                'description' => 'for vendor selling services',
                'slug' => 'service',
                'is_active' => 1,
                'created_at' => '2021-07-15 00:38:10',
                'updated_at' => '2022-03-19 06:45:35',
                'deleted_at' => NULL,
                'in_order' => 6,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Taxi Booking',
                'color' => '#ffc036',
                'description' => 'Book Fanda Taxi and bike Service ',
                'slug' => 'taxi',
                'is_active' => 1,
                'created_at' => '2021-07-15 00:38:10',
                'updated_at' => '2022-03-19 16:06:50',
                'deleted_at' => NULL,
                'in_order' => 8,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Booking',
                'color' => '#6e0000',
                'description' => 'Hotel/Housing/Rental Booking',
                'slug' => 'service',
                'is_active' => 1,
                'created_at' => '2022-01-14 14:44:52',
                'updated_at' => '2022-03-19 05:40:30',
                'deleted_at' => NULL,
                'in_order' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'E-commerce',
                'color' => '#24A19C',
                'description' => 'Shopping from your Favourite Outlet ',
                'slug' => 'commerce',
                'is_active' => 1,
                'created_at' => '2022-02-09 22:46:30',
                'updated_at' => '2022-03-19 16:08:12',
                'deleted_at' => NULL,
                'in_order' => 1,
            ),
        ));
        
        
    }
}