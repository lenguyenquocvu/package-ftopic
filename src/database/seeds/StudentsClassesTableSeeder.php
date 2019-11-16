<?php

use Illuminate\Database\Seeder;

class StudentsClassesTableSeeder extends Seeder
{
    public function run(){
        DB::table('students_classes')->insert(
            array(
                'stu_code' => 'F19TT1001',
                'cl_class' => '19CDPTW001'
            )
        );

        DB::table('students_classes')->insert(
            array(
                'stu_code' => 'F19TT1001',
                'cl_class' => '19CDPTW002'
            )
        );
    }
}
