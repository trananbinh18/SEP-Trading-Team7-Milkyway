<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    //
    protected $table = "hoadon";
    protected $primaryKey = 'MAHD';
    public $timestamps = false;

    public function nguoidung(){
    	return $this->belongsTo('App\nguoidung','MANM','MAND');
    }

    public function chitiethoadon(){
    	return $this->hasMany('App\chitiethoadon','MAHD','MAHD');
    }
}
