<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MyClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('my_classes')->delete();
        
        \DB::table('my_classes')->insert(array (
            0 => 
            array (
                'id' => 12,
                'name' => 'Form 1',
                'class_type_id' => 6,
                'created_at' => '2024-06-24 13:26:40',
                'updated_at' => '2024-06-24 13:26:40',
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'Form 2',
                'class_type_id' => 6,
                'created_at' => '2024-06-24 13:26:51',
                'updated_at' => '2024-06-24 13:26:51',
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'Form 3',
                'class_type_id' => 6,
                'created_at' => '2024-06-24 13:26:59',
                'updated_at' => '2024-06-24 13:26:59',
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'Form 4',
                'class_type_id' => 6,
                'created_at' => '2024-06-24 13:27:08',
                'updated_at' => '2024-06-24 13:27:08',
            ),
        ));
        
        
    }
}