<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    //
    protected $table = 'student_subjects';

    protected $filltable = ['mem_code', 'sub_code']; // mem_code = student code
}
