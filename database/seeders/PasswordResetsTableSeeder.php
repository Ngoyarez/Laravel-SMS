<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'ngoyarez@gmail.com',
                'token' => '$2y$10$eJzUBIq7pYV2c.6nxACg/uGnazUi/fd4j6mHhr7lL.Mm/oEBxrX7G',
                'created_at' => '2024-06-24 14:14:06',
            ),
        ));
        
        
    }
}