<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table = "sanpham";
    protected $primaryKey = 'MASP';
    public $timestamps = false;

    public function nguoiban(){
    	return $this->belongsTo('App\nguoidung','MANB','MAND');
    }

    public function nhanvien(){
    	return $this->belongsTo('App\nguoidung','MANV','MAND');
    }

    public function loaisanpham(){
    	return $this->belongsTo('App\loaisanpham','MALOAISP','MALOAISP');
    }

    public function chitiethoadon(){
    	return $this->hasMany('App\chitiethoadon','MASP','MASP');
    }
}
