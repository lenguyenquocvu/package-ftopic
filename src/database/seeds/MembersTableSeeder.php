<?php

use Illuminate\Database\Seeder;
class MembersTableSeeder extends Seeder {
    public function run() {
        DB::table('members')->insert(
            array(
                'mem_code' => 'F19TT1001',
                'mem_email' => 'student1@teacher.com',
                'mem_name' => 'Đặng Thanh Truyền'
            )
        );

        DB::table('members')->insert(
            array(
                'mem_code' => 'FGV1001',
                'mem_email' => 'teacher1@teacher.com',
                'mem_name' => 'Nguyễn Thanh Tuấn'
            )
        );
    }
}