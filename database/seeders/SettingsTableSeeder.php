<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'current_session',
                'description' => '2024-2025',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'system_title',
                'description' => 'MHS',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'system_name',
                'description' => 'Muhoroni High School',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:19',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'term_ends',
                'description' => '07/15/2024',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'term_begins',
                'description' => '08/03/2024',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'phone',
                'description' => '+254748883944',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'address',
                'description' => 'P.O BOX 158, Muhoroni',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'system_email',
                'description' => 'info@mhs.com',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 'alt_email',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 'email_host',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 'email_pass',
                'description' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 'lock_exam',
                'description' => '1',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'logo',
                'description' => 'http://localhost:8001/storage/uploads//logo.jpeg',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 'next_term_fees_j',
                'description' => '20000',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 'next_term_fees_pn',
                'description' => '25000',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 'next_term_fees_p',
                'description' => '25000',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            16 => 
            array (
                'id' => 17,
                'type' => 'next_term_fees_n',
                'description' => '25600',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            17 => 
            array (
                'id' => 18,
                'type' => 'next_term_fees_s',
                'description' => '15600',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
            18 => 
            array (
                'id' => 19,
                'type' => 'next_term_fees_c',
                'description' => '1600',
                'created_at' => NULL,
                'updated_at' => '2024-06-24 14:43:20',
            ),
        ));
        
        
    }
}