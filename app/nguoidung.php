<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    //
    protected $table = "nguoidung";
    protected $primaryKey = 'MAND';
    public $timestamps = false;

    public function loainguoidung(){
    	return $this->belongsTo('App\loainguoidung','MALOAIND','MALOAIND');
    }

    public function nhanvien(){
    	return $this->hasMany('App\sanpham','MAND','MANV');
    }

    public function nguoiban(){
    	return $this->hasMany('App\sanpham','MAND','MANB');
    }

    public function hoadon(){
    	return $this->hasMany('App\hoadon','MAND','MANM');
    }

    public function chitiethoadon(){
    	return $this->hasMany('App\chitiethoadon','MAND','MANB');
    }
}
