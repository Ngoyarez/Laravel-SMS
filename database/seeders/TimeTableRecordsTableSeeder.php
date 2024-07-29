<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeTableRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('time_table_records')->delete();
        
        \DB::table('time_table_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Teaching Timetable',
                'my_class_id' => 12,
                'exam_id' => NULL,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 14:28:31',
                'updated_at' => '2024-06-24 14:28:31',
            ),
        ));
        
        
    }
}