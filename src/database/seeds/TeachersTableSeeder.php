<?php

use Illuminate\Database\Seeder;
class TeachersTableSeeder extends Seeder {
    public function run() {
        DB::table('teachers')->insert(
            array(
                'tea_code' => 'FGV1001',
                'tea_email' => 'quocvu@teacher.com',
                'tea_name' => 'Lê Nguyễn Quốc Vũ'
            )
        );

        DB::table('teachers')->insert(
            array(
                'tea_code' => 'FGV1002',
                'tea_email' => 'thanhquan@teacher.com',
                'tea_name' => 'Nguyễn Thanh Tuấn'
            )
        );
    }
}