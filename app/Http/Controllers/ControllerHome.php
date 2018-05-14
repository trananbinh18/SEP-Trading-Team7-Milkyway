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
        $product = DB::table('sanpham')->select('masp','maloaisp','tensp','gia','giacu','donvi','hinh')->get();
        // view()->share('cate',$cate);
        return view('home')->with('product',$product);
    }
    function Login(){
        return view('SignIn');
    }
    function Register(){
        return view('SignUp');
    }
}
