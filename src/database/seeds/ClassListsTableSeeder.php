<?php

use Illuminate\Database\Seeder;

class ClassListsTableSeeder extends Seeder {

    public function run() {
        DB::table('class_lists')->insert(
            array(
                "cl_code" => "19CDPTW001",
                "sub_name" => "Chuyên đề web 1",
                "tea_code" => "FGV1002",
                "sub_code" => "CDPTW001"
            )
        );

        DB::table('class_lists')->insert(
            array(
                "cl_code" => "19CDPTW002",
                "sub_name" => "Chuyên đề web 2",
                "tea_code" => "FGV1001",
                "sub_code" => "CDPTW002"
            )
        );
    }
}