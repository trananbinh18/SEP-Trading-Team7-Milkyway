<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quan extends Model
{
    //
    protected $table = "quan";
    protected $primaryKey = 'MAQUAN';
    public $timestamps = false;

    public function phuong(){
    	return $this->hasMany('App\phuong','MAQUAN','MAQUAN');
    }
}
