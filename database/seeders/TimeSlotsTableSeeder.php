<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeSlotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('time_slots')->delete();
        
        \DB::table('time_slots')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ttr_id' => 1,
                'hour_from' => 8,
                'min_from' => '00',
                'meridian_from' => 'AM',
                'hour_to' => 8,
                'min_to' => '35',
                'meridian_to' => 'AM',
                'time_from' => '8:00 AM',
                'time_to' => '8:35 AM',
                'timestamp_from' => '1719216000',
                'timestamp_to' => '1719218100',
                'full' => '8:00 AM - 8:35 AM',
                'created_at' => '2024-06-24 14:29:22',
                'updated_at' => '2024-06-24 14:29:22',
            ),
            1 => 
            array (
                'id' => 2,
                'ttr_id' => 1,
                'hour_from' => 8,
                'min_from' => '35',
                'meridian_from' => 'AM',
                'hour_to' => 9,
                'min_to' => '10',
                'meridian_to' => 'AM',
                'time_from' => '8:35 AM',
                'time_to' => '9:10 AM',
                'timestamp_from' => '1719218100',
                'timestamp_to' => '1719220200',
                'full' => '8:35 AM - 9:10 AM',
                'created_at' => '2024-06-24 14:32:04',
                'updated_at' => '2024-06-24 14:32:04',
            ),
        ));
        
        
    }
}