<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loainguoidung extends Model
{
    //
    protected $table = "loainguoidung";
    protected $primaryKey = 'MALOAIND';
    public $timestamps = false;

    public function nguoidung(){
    	return $this->hasMany('App\nguoidung','MALOAIND','MALOAIND');
    }
}
