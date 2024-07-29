<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff_records')->delete();
        
        \DB::table('staff_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 55,
                'code' => 'MHS/STAFF/2024/06/9446',
                'emp_date' => '06/24/2024',
                'created_at' => '2024-06-24 13:30:59',
                'updated_at' => '2024-06-24 13:30:59',
            ),
        ));
        
        
    }
}