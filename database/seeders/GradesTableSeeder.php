<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grades')->delete();
        
        \DB::table('grades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A',
                'class_type_id' => NULL,
                'mark_from' => 70,
                'mark_to' => 100,
                'remark' => 'Excellent',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'B',
                'class_type_id' => NULL,
                'mark_from' => 60,
                'mark_to' => 69,
                'remark' => 'Very Good',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'C',
                'class_type_id' => NULL,
                'mark_from' => 50,
                'mark_to' => 59,
                'remark' => 'Good',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'D',
                'class_type_id' => NULL,
                'mark_from' => 40,
                'mark_to' => 49,
                'remark' => 'Pass',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 11:39:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'E',
                'class_type_id' => NULL,
                'mark_from' => 40,
                'mark_to' => 44,
                'remark' => 'Poor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'F',
                'class_type_id' => NULL,
                'mark_from' => 0,
                'mark_to' => 39,
                'remark' => 'Fail',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}