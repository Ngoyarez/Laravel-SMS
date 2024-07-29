<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 21,
                'name' => 'Kiswahili',
                'slug' => 'KIS',
                'my_class_id' => 12,
                'teacher_id' => 55,
                'created_at' => '2024-06-24 13:38:17',
                'updated_at' => '2024-06-24 13:38:17',
            ),
            1 => 
            array (
                'id' => 22,
                'name' => 'Mathematics',
                'slug' => 'MAT',
                'my_class_id' => 12,
                'teacher_id' => 55,
                'created_at' => '2024-06-24 14:00:23',
                'updated_at' => '2024-06-24 14:00:23',
            ),
        ));
        
        
    }
}