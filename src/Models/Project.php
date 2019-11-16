<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $filltable = ['pro_code', 'pro_name', 'sub_code', 'tea_code', 'cl_code', 'pro_description']; // mem_code = teacher code

    // protected $pro_id = 'pro_id';

    // protected $pro_link  = 'pro_link';  //pro_link is link of saved file not link to save file

    // protected $lc_code_pro = 'lc_code';

    
}
