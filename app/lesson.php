<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    //
    protected $fillable = ['id', 'name', 'discription', 'all_text', 'teacher', 'zap', 'treb', 'img', 'flag'];
}
