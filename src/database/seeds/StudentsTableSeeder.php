<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder {
    
    public function run() {
        DB::table('students')->insert(
            array(
                'stu_code' => 'F19TT1001',
                'stu_email' => 'thanhtruyen@student.com',
                'stu_name' => 'Đặng Thanh Truyền'
            )
        );

        DB::table('students')->insert(
            array(
                'stu_code' => 'F19TT1002',
                'stu_email' => 'thanhtuan@student.com',
                'stu_name' => 'Nguyễn Thanh Tuấn'
            )
        );

        DB::table('students')->insert(
            array(
                'stu_code' => 'F19TT1003',
                'stu_email' => 'ducdung@student.com',
                'stu_name' => 'Lê Đức Dũng'
            )
        );

        DB::table('students')->insert(
            array(
                'stu_code' => 'F19TT1004',
                'stu_email' => 'quocvu@student.com',
                'stu_name' => 'Lê Nguyễn Quốc Vũ'
            )
        );
    }
}