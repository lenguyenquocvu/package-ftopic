<?php

namespace Fteam\Topic\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $filltable = ['pro_id', 'pro_link', 'sub_code', 'mem_code', 'lc_code', 'pro_description']; // mem_code = teacher code

    // protected $pro_id = 'pro_id';

    // protected $pro_link  = 'pro_link';  //pro_link is link of saved file not link to save file

    // protected $lc_code_pro = 'lc_code';

    
}
