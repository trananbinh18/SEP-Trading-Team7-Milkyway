<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;

class ControllerAccount extends Controller
{
    function Login(Request $re){
    	$user = nguoiban::where('EMAIL',$re->input('email'))->first();
    	$typeuser = 1;
    	if($user == null){
    		$user = nguoimua::where('EMAIL',$re->input('email'))->first();
    		$typeuser = 2;
    	}
    	if($user==null){
    		$user = nhanvien::where('EMAIL',$re->input('email'))->first();
    		$typeuser = 3;
    	}

        if($user!=null) {
            //check password
            if($re->input('matkhau')==$user->MATKHAU){
            	session_start();
            	$_SESSION["user"]=$user;
            	$_SESSION["typeuser"]=$typeuser;
            	return redirect()->route('homepage');
            }
        }
        $typeuser = 0;
        $_SESSION["typeuser"]=$typeuser;
        return redirect()->back();
        
    }

    function Logout(){
    	session_start();
	    unset($_SESSION["user"]);
	    unset($_SESSION["typeuser"]);
    	session_destroy();
    	return redirect()->route('homepage');
    }
}
