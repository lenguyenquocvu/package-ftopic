<?php

use Illuminate\Database\Seeder;

class ClassListsTableSeeder extends Seeder {

    public function run() {
        DB::table('class_lists')->insert(
            array(
                "cl_code" => "19CNC001",
                "sub_name" => "Chuyên đề web 1"
            )
        );

        DB::table('class_lists')->insert(
            array(
                "cl_code" => "19CNC002",
                "sub_name" => "Chuyên đề web 2"
            )
        );
    }
}