<?php

use Illuminate\Database\Seeder;

class StudentSubjectsTableSeeder extends Seeder {
    
    public function run() {
        DB::table('student_subjects')->insert(
            array(
                'stu_code' => 'F19TT1001',
                'sub_code' => 'CDPTW001'
            )
        );
        DB::table('student_subjects')->insert(
            array(
                'stu_code' => 'F19TT1001',
                'sub_code' => 'CDPTW002'
            )
        );
    }
}