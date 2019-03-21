<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddGood;

class GoodController extends Controller
{
    public function index(){

    }
    public function detail(){

    }
    public function add(){
        return view('goods.add');
    }
    public function add1(AddGood $req){

    }
}
