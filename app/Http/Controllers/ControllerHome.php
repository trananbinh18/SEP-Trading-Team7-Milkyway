<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    function about(){
    	return view('about');
    }
    function home(){
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
