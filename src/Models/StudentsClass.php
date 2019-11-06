<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class StudentsClass extends Model
{
    //
    protected $table = 'students_classes';

    protected $filltable = ['mem_code', 'lc_code']; // mem_code <=> student code

    // protected $lc_code_sc = 'lc_code';
}
