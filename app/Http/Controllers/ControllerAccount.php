<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;
use App\admin;
use Cart;
use \Crypt;
use App\Http\Requests\CheckLoginRequest;

class ControllerAccount extends Controller
{
    function Login(CheckLoginRequest $re){
        $user = nguoiban::where('EMAIL',$re->input('email'))->first();
        //$user->MATKHAU = password_hash($user->MATKHAU, PASSWORD_DEFAULT);
        //$query = "INSERT INTO nguoiban(EMAIL, MATKHAU) VALUES('$user', '$user->MATKHAU')";
        $typeuser = 1;
        if($user == null){
            $user = nguoimua::where('EMAIL',$re->input('email'))->first();
            //$user->MATKHAU = password_hash($user->MATKHAU, PASSWORD_DEFAULT);
            //$query = "INSERT INTO nguoimua(EMAIL, MATKHAU) VALUES('$user', '$user->MATKHAU')";
            $typeuser = 2;
        }
        if($user==null){
            $user = nhanvien::where('EMAIL',$re->input('email'))->first();
            //$user->MATKHAU = password_hash($user->MATKHAU, PASSWORD_DEFAULT);
            //$query = "INSERT INTO nhanvien(EMAIL, MATKHAU) VALUES('$user', '$user->MATKHAU')";
            $typeuser = 3;
        }
        if($user==null){
            $user = admin::where('EMAIL',$re->input('email'))->first();
            //$user->MATKHAU = password_hash($user->MATKHAU, PASSWORD_DEFAULT);
            //$query = "INSERT INTO nhanvien(EMAIL, MATKHAU) VALUES('$user', '$user->MATKHAU')";
            $typeuser = 4;
        }

        if($user!=null) {
            //check password
            //
            if($re->input('matkhau')==Crypt::decrypt($user->MATKHAU)){
                // session_start();
                // $_SESSION["user"]=$user;
                // $_SESSION["typeuser"]=$typeuser;
                switch ($typeuser) {
                    case 1:
                        session(['userid' => $user->MANB]);
                        session(['typeuser' => 1]);
                        session(['name' => $user->TENNB]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        session(['status'=>$user->TTNB]);
                        return redirect()->route('listpro');
                        break;
                    case 2:
                        session(['userid' => $user->MANM]);
                        session(['typeuser' => 2]);
                        session(['name' => $user->TENNM]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        return redirect()->route('homepage');
                    case 3:
                        session(['userid' => $user->MANV]);
                        session(['typeuser' => 3]);
                        session(['name' => $user->TENNV]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        return redirect()->route('listprosale');
                    case 4:
                        session(['userid' => $user->MAAD]);
                        session(['typeuser' => 4]);
                        session(['name' => $user->TENAD]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        return redirect()->route('Account_Employees');
                        break;    
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
