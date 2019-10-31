<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class ClassList extends Model
{
    //
    protected $table = 'class_lists';

    protected $filltable = ['cl_code', 'sub_name'];

    // protected $cl_code = 'cl_code';

    // protected $sub_name_cl = 'sub_name';
}
