<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    //
    protected $table = "nhanvien";
    protected $primaryKey = 'MANV';
    public $timestamps = false;

    public function sanpham(){
        return $this->hasMany('App\sanpham','MANV','MANV');
    }
}
