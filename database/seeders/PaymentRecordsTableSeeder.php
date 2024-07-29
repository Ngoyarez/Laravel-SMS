<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_records')->delete();
        
        \DB::table('payment_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payment_id' => 1,
                'student_id' => 56,
                'ref_no' => '57537223',
                'amt_paid' => 26000,
                'balance' => 14350,
                'paid' => 0,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 14:34:49',
                'updated_at' => '2024-06-24 14:35:15',
            ),
        ));
        
        
    }
}