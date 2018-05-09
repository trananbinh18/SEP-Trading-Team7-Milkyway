<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoimua extends Model
{
    //
    protected $table = "nguoimua";
    protected $primaryKey = 'MANM';
    public $timestamps = false;

    public function hoadon(){
        return $this->hasMany('App\hoadon','MANM','MANM');
    }
}
