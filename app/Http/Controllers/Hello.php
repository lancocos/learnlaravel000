<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class Hello extends Controller
{
    //
    public function __construct(){

    }
    public function index(){
        print_r($this);
    }
    public function index1(){

}
}
