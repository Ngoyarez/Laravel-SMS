<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamRecordsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exam_records')->delete();
        
        \DB::table('exam_records')->insert(array (
            0 => 
            array (
                'id' => 1,
                'exam_id' => 1,
                'student_id' => 56,
                'my_class_id' => 12,
                'section_id' => 18,
                'total' => 146,
                'ave' => '73',
                'class_ave' => '73',
                'pos' => 1,
                'af' => '2,4,3,3,5,4,2',
                'ps' => '2,3,3,1,4,5,3',
                'p_comment' => 'Very Good Performance!',
                't_comment' => 'You did well!',
                'year' => '2024-2025',
                'created_at' => '2024-06-24 13:38:30',
                'updated_at' => '2024-06-24 14:26:54',
            ),
        ));
        
        
    }
}