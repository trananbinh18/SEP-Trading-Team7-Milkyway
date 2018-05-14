<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\View\Compilers\BladeCompiler;

class LoadDataController extends Controller
{
	public function index(){
	//load sản phẩm
	$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','GCN','HINH')->get();
	
		return view('ListProduct')->with('products',$products);
	}
}
