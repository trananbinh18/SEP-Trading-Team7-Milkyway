<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    //
    protected $table = "hoadon";
    protected $primaryKey = 'MAHD';
    public $timestamps = false;

    public function nguoimua(){
    	return $this->belongsTo('App\nguoimua','MANM','MANM');
    }

    public function chitiethoadon(){
    	return $this->hasMany('App\chitiethoadon','MAHD','MAHD');
    }
}
