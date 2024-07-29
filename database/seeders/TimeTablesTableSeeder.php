<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('time_tables')->delete();
        
        \DB::table('time_tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ttr_id' => 1,
                'ts_id' => 1,
                'subject_id' => 22,
                'exam_date' => NULL,
                'timestamp_from' => '1719216000',
                'timestamp_to' => '1719218100',
                'day' => 'Monday',
                'day_num' => NULL,
                'created_at' => '2024-06-24 14:30:31',
                'updated_at' => '2024-06-24 14:30:31',
            ),
            1 => 
            array (
                'id' => 2,
                'ttr_id' => 1,
                'ts_id' => 2,
                'subject_id' => 21,
                'exam_date' => NULL,
                'timestamp_from' => '1719218100',
                'timestamp_to' => '1719220200',
                'day' => 'Monday',
                'day_num' => NULL,
                'created_at' => '2024-06-24 14:32:24',
                'updated_at' => '2024-06-24 14:32:24',
            ),
        ));
        
        
    }
}