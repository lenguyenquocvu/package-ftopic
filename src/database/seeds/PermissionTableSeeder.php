<?php

use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder {
    public function run() {
        $permission_repository = App::make('permission_repository');

        $permission_teacher           = [
                "description" => "teacher",
                "permission"  => "_teacher",
                "url"   => '',
                "overview"   => '',
        ];
        $permission_repository->create($permission_teacher);

        $permission_student = [
                "description" => "student",
                "permission"  => "_student",
                "url"   => '',
                "overview"   => '',
        ];
        $permission_repository->create($permission_student);
    }
}