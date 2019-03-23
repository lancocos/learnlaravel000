<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddGood;
use App\Models\Good;
use http\Env\Response;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index(Request $req){
        $list = Good::paginate(1);
        if($req->ajax()){

            return json_encode($list);
        }

        return view('goods.index',compact('list'));
    }
    public function detail(){

    }
    public function add(){
        return view('goods.add');
    }
    public function add1(AddGood $req){
        $good = new Good();
        $good->name=$req->get('name');
        $good->cover_id=$req->get('cover_id',1);
        $good->category_id=$req->get('category_id');
        $good->branch_id=$req->get('branch_id');
        $good->price=$req->get('price');
        $good->views=$req->get('views',0);
        $good->status=$req->get('status',0);
        if($good->save()){
            echo "ok";
        }

    }

    public function edit(Request $req, $id=0){
        $good = Good::findOrFail($id);
        return view('goods.add',['good'=>$good]);
    }
    public function test(Request $req,$id=0){

        $good = Good::find($id);

        $good->url = $good->cover->url;
        return Response()->json($good);
    }
    public function QueryBuilder(){
        $goodsQuery = Good::where('id','=',1)
            ->where('price','=',100)
            ->orWhere(function($query){
                $query->where('price','>',1);
            })
            ->inRandomOrder()
        ->when(false,function($query){
            return $query->whereId(2);
        });

        echo $goodsQuery->toSql();
        $goods = $goodsQuery->get()->toArray();
        dd($goods);
    }
}
