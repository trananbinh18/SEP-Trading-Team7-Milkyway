<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request as Controller;
use Illuminate\Http\Request;
use App\Http\User;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$email = $request['email'];
  		$matkhau = $request['matkhau'];
		// $email -> 'required|email|max:255|unique:user_list';

         if (Auth::attempt(['EMAIl'=>$email,'MATKHAU'=>$matkhau]))
           { //thành công
            return view('home');//['user' =>Auth::user()]
             # code...
         }else{
         	return view('SignUp_Buyer', ['error'=> 'Đăng nhập thất bại']);
         }
            
	}
    //
}
