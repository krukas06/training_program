<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursController extends Controller
{
    //
    public function teory(){
        return view('teory');
    }

    public function conspect(){
        return view('conspect');
    }

    public function test_t(){
        return view('test');
    }

}
