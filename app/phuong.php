<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phuong extends Model
{
    //
    protected $table = "phuong";
    protected $primaryKey = 'MAPHUONG';
    public $timestamps = false;

    public function quan(){
    	return $this->hasOne('App\quan','MAQUAN','MAQUAN');
    }
}
