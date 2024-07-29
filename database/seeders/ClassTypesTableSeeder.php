<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('class_types')->delete();
        
        \DB::table('class_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Creche',
                'code' => 'C',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pre Nursery',
                'code' => 'PN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nursery',
                'code' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Primary',
                'code' => 'P',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Junior Secondary',
                'code' => 'J',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Senior Secondary',
                'code' => 'S',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}