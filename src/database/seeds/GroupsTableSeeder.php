<?php

use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder {

    public function run ()
    {
        $group_repository = App::make('group_repository');

        $group_teacher = [
                "name" => "teacher",
                "permissions" => ["_teacher" => 1]
        ];

        $group_repository->create($group_teacher);

        $group_student = [
                "name" => "student",
                "permissions" => ["_student" => 1]
        ];

        $group_repository->create($group_student);
    }
}