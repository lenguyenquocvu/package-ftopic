<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProject extends Model
{
    //
    protected $table = 'student_projects';

    protected $filltable = ['mem_code', 'sub_code'];
}
