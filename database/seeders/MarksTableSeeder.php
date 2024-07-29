<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marks')->delete();
        
        \DB::table('marks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'student_id' => 56,
                'subject_id' => 21,
                'my_class_id' => 12,
                'section_id' => 18,
                'exam_id' => 1,
                't1' => 15,
                't2' => 16,
                't3' => NULL,
                't4' => NULL,
                'tca' => 31,
                'exm' => 45,
                'tex1' => 76,
                'tex2' => NULL,
                'tex3' => NULL,
                'sub_pos' => 1,
                'cum' => NULL,
                'cum_ave' => NULL,
                'grade_id' => 1,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 13:38:30',
                'updated_at' => '2024-06-24 14:20:00',
            ),
            1 => 
            array (
                'id' => 2,
                'student_id' => 56,
                'subject_id' => 22,
                'my_class_id' => 12,
                'section_id' => 18,
                'exam_id' => 1,
                't1' => 10,
                't2' => 10,
                't3' => NULL,
                't4' => NULL,
                'tca' => 20,
                'exm' => 50,
                'tex1' => 70,
                'tex2' => NULL,
                'tex3' => NULL,
                'sub_pos' => 1,
                'cum' => NULL,
                'cum_ave' => NULL,
                'grade_id' => 1,
                'year' => '2024-2025',
                'created_at' => '2024-06-24 14:00:59',
                'updated_at' => '2024-06-24 14:01:14',
            ),
        ));
        
        
    }
}