<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Test extends Controller
{
    //
    public function __construct()
    {

        echo Session::get("name","default");
    }

    public function index(){
        apc_add("v1",123);
        $re = apc_fetch("v1");
        echo $re;
    }
}
