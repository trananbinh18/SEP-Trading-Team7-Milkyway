<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $table = "admin";
    protected $primaryKey = 'MAAD';
    public $timestamps = false;

    public function admin(){
    	return $this->belongsTo('App\admin','MAAD','MAAD');
    }
}
