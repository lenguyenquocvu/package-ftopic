<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProject extends Model
{
    //
    protected $table = 'student_projects';

    protected $filltable = ['stu_code', 'pro_code', 'sp_link'];
}
