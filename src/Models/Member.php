<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'members';

    protected $filltable = ['mem_code', 'mem_email', 'mem_name'];

    // protected$mem_code = 'mem_code';

    // protected $mem_email = 'mem_email';

    // protected $mem_name = 'mem_name';
}
