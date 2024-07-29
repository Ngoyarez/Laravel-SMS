<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('student_records')->delete();
        
        \DB::table('student_records')->insert(array (
            0 => 
            array (
                'id' => 38,
                'user_id' => 56,
                'my_class_id' => 12,
                'section_id' => 18,
                'adm_no' => 'MHS/S/2024/71988',
                'my_parent_id' => 4,
                'dorm_id' => NULL,
                'dorm_room_no' => NULL,
                'session' => '2024-2025',
                'house' => NULL,
                'age' => NULL,
                'year_admitted' => '2024',
                'grad' => 0,
                'grad_date' => NULL,
                'created_at' => '2024-06-24 13:35:20',
                'updated_at' => '2024-06-24 15:00:03',
            ),
        ));
        
        
    }
}