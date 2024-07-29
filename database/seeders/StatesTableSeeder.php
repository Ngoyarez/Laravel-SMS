<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abia',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adamawa',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Akwa Ibom',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Anambra',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bauchi',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bayelsa',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Benue',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Borno',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cross River',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Delta',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Ebonyi',
                'created_at' => '2024-06-24 10:40:06',
                'updated_at' => '2024-06-24 10:40:06',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Edo',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ekiti',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Enugu',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'FCT',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Gombe',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Imo',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Jigawa',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Kaduna',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Kano',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Katsina',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Kebbi',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Kogi',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Kwara',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Lagos',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nasarawa',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Niger',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ogun',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Ondo',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Osun',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Oyo',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Plateau',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Rivers',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Sokoto',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Taraba',
                'created_at' => '2024-06-24 10:40:07',
                'updated_at' => '2024-06-24 10:40:07',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Yobe',
                'created_at' => '2024-06-24 10:40:08',
                'updated_at' => '2024-06-24 10:40:08',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Zamfara',
                'created_at' => '2024-06-24 10:40:08',
                'updated_at' => '2024-06-24 10:40:08',
            ),
        ));
        
        
    }
}