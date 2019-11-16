<?php
// namespace Fteam\Topic\database\seeds;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run() {

        Eloquent::unguard();

        $this->call('MembersTableSeeder');
        $this->call('SubjectsTableSeeder');
        $this->call('ClassListsTableSeeder');
        $this->call('StudentsClassesTableSeeder');
        $this->call('StudentSubjectsTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('StudentsTableSeeder');
        $this->call('TeachersTableSeeder');

        Eloquent::reguard();
    }
}

