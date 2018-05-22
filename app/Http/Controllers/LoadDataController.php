<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Query\Builder;
use Illuminate\View\Compilers\BladeCompiler;

class LoadDataController extends Controller
{
	public function index(){
	//load sản phẩm
	if(session()->get('userid') == 1 || session()->get('userid') == 2 || session()->get('userid') == 3){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
	$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH')->where('MANB',session()->get('userid'))->get();
	
		return view('ListProduct')->with('products',$products);
	}
	return redirect()->route('homepage');
	}

	public function loadListProduct_Sale(){
		if(session()->get('typeuser') == 3){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$sanpham = DB::table('sanpham')->join('loaisanpham', 'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP', 'TENSP', 'SOLUONG', 'GIA', 'GIACU', 'DONVI', 'TRANGTHAI', 'HINH')->get();

		return view('ListAllProducts')->with('sanpham', $sanpham);
		}
		return redirect()->route('homepage');
	}
}
