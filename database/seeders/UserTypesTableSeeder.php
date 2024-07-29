<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_types')->delete();
        
        \DB::table('user_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'accountant',
                'name' => 'Accountant',
                'level' => '5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'parent',
                'name' => 'Parent',
                'level' => '4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'teacher',
                'name' => 'Teacher',
                'level' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'admin',
                'name' => 'Admin',
                'level' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'super_admin',
                'name' => 'Super Admin',
                'level' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}