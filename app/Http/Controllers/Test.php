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
        phpinfo();
        exit;
        abort(404);
        \Log::debug('userinfo',['id'=>1,'name'=>'imwz','password'=>md5('admin')]);

        /*
        apc_add("v1",123);
        $re = apc_fetch("v1");
        echo $re;
        */
    }
}
