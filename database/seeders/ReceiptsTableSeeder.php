<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReceiptsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('receipts')->delete();
        
        \DB::table('receipts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pr_id' => 1,
                'amt_paid' => 26000,
                'balance' => 14350,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 14:35:15',
                'updated_at' => '2024-06-24 14:35:15',
            ),
        ));
        
        
    }
}