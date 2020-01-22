<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['name_curs', 'name', 'surname', 'otchestvo', 'email'];
}
