<?php

namespace App\Http\Controllers;

use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //

    public function index(){
        $res = Redis::get("name");

        dd($res);
    }
    public function subscribe(){
        Redis::subscribe("test-channel",function($data){
            //return $data;
        });
    }
    public function publish(){
        //echo 111;
        Redis::publish("test-channel","hello");
    }
}
