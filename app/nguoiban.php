<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoiban extends Model
{
    //
    protected $table = "nguoiban";
    protected $primaryKey = 'MANB';
    public $timestamps = false;

    public function chitiethoadon(){
        return $this->hasMany('App\chitiethoadon','MANB','MANB');
    }

    public function sanpham(){
        return $this->hasMany('App\sanpham','MANB','MANB');
    }
}
