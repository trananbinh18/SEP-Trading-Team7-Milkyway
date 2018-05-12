<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class ControllerAccount extends Controller
{
    function Login(Request $re){
    	$user = DB::table('nhanvien')->select('email')->where('email',$re->email)->get();
        if(count($user) >= 1) {
            return redirect()->route('homepage');
        }
        return redirect()->back();
    }
}
