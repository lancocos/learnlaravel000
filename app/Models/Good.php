<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    protected $table="goods";
    public function cover(){
        return $this->hasOne(\App\Models\GoodCover::class,'id','cover_id');
    }
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
