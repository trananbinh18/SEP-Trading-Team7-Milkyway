<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Cart;
use App\phuong;
use App\quan;

class ControllerHome extends Controller
{
   	function about(){
        return view('about');
    }
    function home(){
        $product = DB::table('sanpham')->select('masp','maloaisp','tensp','gia','giacu','donvi','hinh','trangthai')->orderBy('masp','desc')->get();
        // view()->share('cate',$cate);
        return view('home')->with('product',$product);
    }
    function Login(){
        return view('SignIn');
    }
    function Register(){
        $district = DB::table('quan')->select('MAQUAN','TENQUAN')->get();
        return view('SignUp', compact('district', $district));
    }
    function Shipping(){
        return view('Shipping');
    }
    function Contact(){
        return view('Contact');
    }
    function Legal(){
        return view('Legal');
    }
    function Term(){
        return view('Term');
    }
}
