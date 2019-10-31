<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder {
    
    public function run() {
        DB::table('subjects')->insert(
            array(
                'sub_code' => 'CNC001',
                'sub_name' => 'Chuyên đề web 1'
            )
        );
        DB::table('subjects')->insert(
            array(
                'sub_code' => 'CNC002',
                'sub_name' => 'Chuyên đề web 2'
            )
        );
    }
}