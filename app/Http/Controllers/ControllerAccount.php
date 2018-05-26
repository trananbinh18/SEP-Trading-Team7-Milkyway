<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;
use Cart;

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
            	// session_start();
            	// $_SESSION["user"]=$user;
            	// $_SESSION["typeuser"]=$typeuser;
                switch ($typeuser) {
                    case 1:
                        session(['userid' => $user->MANB]);
                        session(['typeuser' => 1]);
                        session(['name' => $user->TENNB]);
                        session(['password' => $user->MATKHAU]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->PHUONG]);
                        session(['district' => $user->QUAN]);
                        session(['city' => $user->TP]);
                        session(['status'=>$user->TTNB]);
                        return redirect()->route('listpro');
                        break;
                    case 2:
                        session(['userid' => $user->MANM]);
                        session(['typeuser' => 2]);
                        session(['name' => $user->TENNM]);
                        session(['password' => $user->MATKHAU]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->PHUONG]);
                        session(['district' => $user->QUAN]);
                        session(['city' => $user->TP]);
                        return redirect()->route('Buyer_Infor');
                    case 3:
                        session(['userid' => $user->MANV]);
                        session(['typeuser' => 3]);
                        session(['name' => $user->TENNV]);
                        session(['password' => $user->MATKHAU]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->PHUONG]);
                        session(['district' => $user->QUAN]);
                        session(['city' => $user->TP]);
                        return redirect()->route('homepage');    
                    default:
                        return redirect()->back();
                        break;
                }
            }
        }
        // $typeuser = 0;
        // $_SESSION["typeuser"]=$typeuser;
        return redirect()->back();
    }

    function Logout(){
    	// session_start();
	    // unset($_SESSION["user"]);
	    // unset($_SESSION["typeuser"]);
        Cart::destroy();
    	// session_destroy();
        session()->flush();
    	return redirect()->route('homepage');
    }
}
