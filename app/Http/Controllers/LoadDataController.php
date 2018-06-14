<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Query\Builder;
use Illuminate\View\Compilers\BladeCompiler;

class LoadDataController extends Controller
{
	//Load sản phẩm chưa duyệt
	public function index(){
		if(session()->get('typeuser') == 1){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();
	
		return view('ListProduct_Seller')->with('products',$products);
	}
		return view('Error');
	}
	//Load sản phẩm đã duyệt
	public function ListApproved(){
		if(session()->get('typeuser') == 1){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
	
		return view('ListProduct_Seller')->with('products',$products);
		}
		return view('Error');
	}
	//Ẩn sản phẩm nhanh
	public function QuickHide($id){
		// echo $id;
		//$Product = new sanpham();
		$Product = sanpham::find($id);		
		$Product->TRANGTHAI = 2;
		$Product->save();
		return redirect()->route('listpro')->with('thongbao','Bạn đã ẩn sản phẩm thành công');

	}
	//Load sản phẩm ẩn
	public function ListHide(){
		if(session()->get('typeuser') == 1){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
		
		return view('ListHideProduct')->with('products',$products);
		}
		return view('Error');
	}

	public function loadListProduct_Sale(){
		if(session()->get('typeuser') == 3){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$sanpham = DB::table('sanpham')->join('loaisanpham', 'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP', 'TENSP', 'SOLUONG', 'GIA', 'GIACU', 'DONVI', 'TRANGTHAI', 'HINH', 'MASP')->orderBy('sanpham.MASP', 'DESC')->get();

		return view('ListAllProducts')->with('sanpham', $sanpham);
		}
		return view('Error');
	}

	public function accountSeller(){
		if(session()->get('typeuser') == 3){
			$account = DB::table('nguoiban')->select('TENNB', 'SDT', 'EMAIL','MANB')->get();

			return view('SellerAccount')->with('account', $account);
		}
		return view('Error');
	}

	public function accountBuyer(){
		if(session()->get('typeuser') == 3){
			$account = DB::table('nguoimua')->select('TENNM','SDT', 'EMAIL', 'MANM')->get();

			return view('BuyerAccount')->with('account', $account);
		}
			return view('Error');
	}
	public function orders(){
		if(session()->get('typeuser') == 2){
			$orders = DB::table('hoadon')->join('chitiethoadon', 'chitiethoadon.MAHD' , '=', 'hoadon.MAHD')->select('NLHD', 'THANHTIEN','TTHD','SOHD','MACTHD')->where('MANM', session()->get('userid'))->get();

			return view('Donhang')->with('orders', $orders);
		}else{
			return view('Error');
		}
	}
}
