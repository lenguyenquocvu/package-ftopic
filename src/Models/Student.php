<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';

    protected $filltable = ['stu_code', 'stu_email', 'stu_name'];
}
