<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('book_requests')->delete();
        
        
        
    }
}