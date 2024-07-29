<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exams')->delete();
        
        \DB::table('exams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'End Term 1 Exams',
                'term' => 1,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 11:41:48',
                'updated_at' => '2024-06-24 13:36:58',
            ),
        ));
        
        
    }
}