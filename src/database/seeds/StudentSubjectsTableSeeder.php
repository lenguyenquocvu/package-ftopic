<?php

use Illuminate\Database\Seeder;

class StudentSubjectsTableSeeder extends Seeder {
    
    public function run() {
        DB::table('student_subjects')->insert(
            array(
                'mem_code' => 'F19TT1001',
                'sub_code' => 'CNC001'
            )
        );
        DB::table('student_subjects')->insert(
            array(
                'mem_code' => 'F19TT1001',
                'sub_code' => 'CNC002'
            )
        );
    }
}