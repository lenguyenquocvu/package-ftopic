<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $table = 'subjects';

    protected $filltable = ['sub_code', 'sub_name'];

    protected $sub_code = 'sub_code';

    protected $sub_name = 'sub_name';
}
