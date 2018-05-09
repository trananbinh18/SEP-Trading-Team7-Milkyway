<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    //
    protected $table = "chitiethoadon";
    protected $primaryKey = 'MACTHD';
    public $timestamps = false;

    public function hoadon(){
    	return $this->belongsTo('App\hoadon','MAHD','MAHD');
    }

 	public function sanpham(){
    	return $this->hasOne('App\sanpham','MASP','MASP');
    }

    public function nguoiban(){
    	return $this->belongsTo('App\nguoiban','MANB','MANB');
    }    
}
