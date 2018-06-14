<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\hoadon;
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
	public function QuickHide($id){;
		$Product = sanpham::find($id);		
		$Product->TRANGTHAI = 2;
		$Product->save();
		return redirect()->route('listpro')->with('thongbao','Bạn đã ẩn sản phẩm thành công');

	}
	public function QuickShow($id){
		$Product = sanpham::find($id);		
		$Product->TRANGTHAI = 0;
		$Product->save();
		return redirect()->route('ListHide')->with('thongbao','Bạn đã ẩn sản phẩm thành công');
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
	//Load tài khoản của người bán trong trang nhân viên
	public function accountSeller(){
		if(session()->get('typeuser') == 3){
			$account = DB::table('nguoiban')->select('TENNB', 'SDT', 'EMAIL','MANB')->get();

			return view('SellerAccount')->with('account', $account);
		}
		return view('Error');
	}
	//Load tài khoản của người mua trong trang nhân viên
	public function accountBuyer(){
		if(session()->get('typeuser') == 3){
			$account = DB::table('nguoimua')->select('TENNM','SDT', 'EMAIL', 'MANM')->get();

			return view('BuyerAccount')->with('account', $account);
		}
			return view('Error');
	}
	//Load thông tin đơn hàng của người mua
	public function orders(){
		if(session()->get('typeuser') == 2){
			$orders = DB::table('hoadon')->select('NLHD', 'TONGTIEN','TTHD','SOHD','MAHD')->where('MANM', session()->get('userid'))->whereIn('TTHD', [0,3])->get();

			return view('Donhang')->with('orders', $orders);
		}else{
			return view('Error');
		}
	}
	//Hủy đơn hàng do người mua thực hiện
	public function deleteOrders($id){
		$huyhoadon = hoadon::find($id);
		$huyhoadon->TTHD = 4;
		$huyhoadon->save();
		return redirect()->route('Orders')->with('thanhcong','Bạn đã hủy hóa đơn thành công');
	}
	//Load lịch sử mua hàng của người mua
	public function historyOrders(){
		if(session()->get('typeuser') == 2){
			$history = DB::table('hoadon')->select('NLHD', 'TONGTIEN', 'TTHD', 'SOHD' , 'MAHD')->where('MANM', session()->get('userid'))->whereIn('TTHD', [3,4])->get();

			return view('HistoryBuyItem')->with('history', $history);
		}else{
			return view('Error');
		}
	}
}
