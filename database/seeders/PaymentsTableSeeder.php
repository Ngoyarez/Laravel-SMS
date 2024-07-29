<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'School Fees',
                'amount' => 40350,
                'ref_no' => '2024/43607',
                'method' => 'cash',
                'my_class_id' => 12,
                'description' => 'School Fees',
                'year' => '2024-2025',
                'created_at' => '2024-06-24 14:34:28',
                'updated_at' => '2024-06-24 14:34:28',
            ),
        ));
        
        
    }
}