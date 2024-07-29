<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 14,
                'name' => 'A',
                'my_class_id' => 12,
                'teacher_id' => NULL,
                'active' => 1,
                'created_at' => '2024-06-24 13:26:40',
                'updated_at' => '2024-06-24 13:26:40',
            ),
            1 => 
            array (
                'id' => 15,
                'name' => 'A',
                'my_class_id' => 13,
                'teacher_id' => NULL,
                'active' => 1,
                'created_at' => '2024-06-24 13:26:51',
                'updated_at' => '2024-06-24 13:26:51',
            ),
            2 => 
            array (
                'id' => 16,
                'name' => 'A',
                'my_class_id' => 14,
                'teacher_id' => NULL,
                'active' => 1,
                'created_at' => '2024-06-24 13:26:59',
                'updated_at' => '2024-06-24 13:26:59',
            ),
            3 => 
            array (
                'id' => 17,
                'name' => 'A',
                'my_class_id' => 15,
                'teacher_id' => NULL,
                'active' => 1,
                'created_at' => '2024-06-24 13:27:08',
                'updated_at' => '2024-06-24 13:27:08',
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Longonot',
                'my_class_id' => 12,
                'teacher_id' => 55,
                'active' => 1,
                'created_at' => '2024-06-24 13:31:24',
                'updated_at' => '2024-06-24 13:31:24',
            ),
        ));
        
        
    }
}