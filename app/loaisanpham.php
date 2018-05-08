<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    //
    protected $table = "loaisanpham";
    protected $primaryKey = 'MALOAISP';
    public $timestamps = false;

    public function sanpham(){
    	return $this->hasMany('App\sanpham','MALOAISP','MALOAISP');
    }
}
