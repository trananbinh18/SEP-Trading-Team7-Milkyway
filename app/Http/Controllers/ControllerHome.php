<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class ControllerHome extends Controller
{
    function about(){
    	return view('about');
    }
    function home(){
    	$cate = DB::table('loaisanpham')->get();
    	return view('home');
    }
    function Login(){
        return view('SignIn');
    }
    function Register(){
        return view('SignUp');
    }

    function Getproduct(){
        return view ('Addproduct');
    }
}
