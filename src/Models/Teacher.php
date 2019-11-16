<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $table = 'teachers';

    protected $filltable = ['tea_code', 'tea_email', 'tea_name'];
}
