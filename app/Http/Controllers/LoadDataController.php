<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use App\hoadon;
use App\admin;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Query\Builder;
use Illuminate\View\Compilers\BladeCompiler;

class LoadDataController extends Controller
{
	//Load sản phẩm chưa duyệt
	public function index(){
		if(session()->get('typeuser') == 1){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

		$product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

		$countApproveproduct = count($product);

		$productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

		$countHideproduct = count($productHide);
		

		return view('ListProduct_Seller',compact('countApproveproduct', $countApproveproduct),compact('countHideproduct',$countHideproduct))->with('products',$products); 
	}
		return view('Error');
	}
	//Load sản phẩm đã duyệt
	public function ListApproved(){
		if(session()->get('typeuser') == 1){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

		$countUnapprovedproduct = count($products); 

		$productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

		$countHideproduct = count($productHide);

		return view('ListproductApproved',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countHideproduct',$countHideproduct))->with('product',$product);	

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
		$productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
		
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

		$countUnapprovedproduct = count($products);

		$product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH','GCN', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

		$countApproveproduct = count($product);
		
		
		return view('ListHideProduct',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('productHide',$productHide);
		}
		return view('Error');
	}

	//Đơn hàng được đặt
    public function ordersplaced(){
        if(session()->get('typeuser') == 1){
            $Productsplaced = DB::table('hoadon')->join('chitiethoadon','hoadon.MAHD','=','chitiethoadon.MAHD')->join('sanpham','chitiethoadon.MASP','=','sanpham.MASP')->select('TENSP','NLHD','SLUONG','DONGIA','THANHTIEN','TTHD','hoadon.MAHD')->where('chitiethoadon.MANB', session()->get('userid'))->whereIn('TTHD', [0])->get();

            $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

            $countUnapprovedproduct = count($products); 

            $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
            $countApproveproduct = count($product);

            $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

            $countHideproduct = count($productHide);   


            return view('Ordersplaced',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct)->with('Productsplaced',$Productsplaced);
        }else{
            return view('Error');
        }
        
    }
    //Xác nhận đơn hàng nhanh
    public function quickodersplaced($id){
        $Productsplaced = hoadon::find($id);
        $Productsplaced->TTHD = 3;
        $Productsplaced->save();
        return redirect()->route('ordersplaced')->with('thongbao','Bạn đã xác nhận đơn hàng thành công');
    }

	public function loadListProduct_Sale(){
		if(session()->get('typeuser') == 3){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		$sanpham = DB::table('sanpham')->join('loaisanpham', 'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP', 'TENSP', 'SOLUONG', 'GIA', 'GIACU', 'DONVI', 'TRANGTHAI', 'HINH','GCN', 'MASP')->orderBy('sanpham.MASP', 'DESC')->get();

		return view('ListAllProducts')->with('sanpham', $sanpham);
		}
		return view('Error');
	}
	//Load tài khoản của người bán trong trang nhân viên
	public function accountSeller(){
		if(session()->get('typeuser') == 3){
			$account = DB::table('nguoiban')->select('TENNB', 'SDT', 'EMAIL','MANB','TTNB')->get();

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
	//Load tài khoản của nhân viên trong trang admin
	public function accountEmployees(){
		if(session()->get('typeuser') == 4){
			$account = DB::table('nhanvien')->select('TENNV','SDT', 'EMAIL', 'MANV')->get();

			return view('EmployeesAccount')->with('account', $account);
		}
			return view('Error');
	}
	//Load thông tin đơn hàng của người mua
	public function orders(){
		if(session()->get('typeuser') == 2){
			$orders = DB::table('hoadon')->select('NLHD', 'TONGTIEN','TTHD','SOHD','MAHD')->where('MANM', session()->get('userid'))->whereIn('TTHD', [0,3])->orderBy('hoadon.MAHD','DESC')->get();

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

	//Trả lại trang thống kê
	public function salerevenue(){
		if(session()->get('typeuser') == 1){
		$products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

		$countUnapprovedproduct = count($products);

		$product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

		$countApproveproduct = count($product);

		$productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

		$countHideproduct = count($productHide);

			return view('revenue',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct);	
		}else{
			return view('Error');
		}
		
	}

	public function Salerevenueemployee(){
		if(session()->get('typeuser') == 3){ //check session xem đã đăng nhập hay chưa, nếu có rồi mới cho thực hiện
		return view('revenueEmployee');
		}
		return view('Error');
	}

	//Trả lại dữ liệu thống kê theo thang gồm [tháng,tổng số tiền bán được trong tháng đó]
	public function loadDataAnalyzethang($id){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('MONTH(NLHD) as thang'),DB::raw('SUM(THANHTIEN) as tong'))->where('MANB','=',$id)->groupBy(DB::raw('MONTH(NLHD)'))->orderBy(DB::raw('MONTH(NLHD)'))->get();
	}

	//Trả lại dữ liệu thống kê theo ngay gồm [ngay,tổng số tiền bán được trong tháng đó]
	public function loadDataAnalyzengay($id){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('DAY(NLHD) as ngay,MONTH(NLHD) as thang'),DB::raw('SUM(THANHTIEN) as tong'))->where('MANB','=',$id)->groupBy(DB::raw('DAY(NLHD),MONTH(NLHD)'))->orderBy(DB::raw('NLHD'))->get();
	}

	//Trả lại dữ liệu thống kê theo tuan gồm [tuan,tổng số tiền bán được trong tháng đó]
	public function loadDataAnalyzetuan($id){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('WEEK(NLHD) as tuan'),DB::raw('SUM(THANHTIEN) as tong'))->where('MANB','=',$id)->groupBy(DB::raw('WEEK(NLHD)'))->orderBy(DB::raw('WEEK(NLHD)'))->get();
	}



	//Trả dữ liệu thống kê cho nhân viên theo ngày
	public function loadDataAnalyzengayforEmployee(){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('DAY(NLHD) as ngay,MONTH(NLHD) as thang'),DB::raw('SUM(THANHTIEN) as tong'))->groupBy(DB::raw('DAY(NLHD),MONTH(NLHD)'))->orderBy(DB::raw('NLHD'))->get();
	}
	//Trả dữ liệu thống kê cho nhân viên theo tháng
	public function loadDataAnalyzethangforEmployee(){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('MONTH(NLHD) as thang'),DB::raw('SUM(THANHTIEN) as tong'))->groupBy(DB::raw('MONTH(NLHD)'))->orderBy(DB::raw('MONTH(NLHD)'))->get();
	}
	//Trả dữ liệu thống kê cho nhân viên theo tuần
	public function loadDataAnalyzetuanforEmployee(){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('WEEK(NLHD) as tuan'),DB::raw('SUM(THANHTIEN) as tong'))->groupBy(DB::raw('WEEK(NLHD)'))->orderBy(DB::raw('WEEK(NLHD)'))->get();
	}
	//Trả dữ liệu thống kê cho nhân viên theo năm
	public function loadDataAnalyzenamforEmployee(){

		return DB::table('chitiethoadon')->join('hoadon','chitiethoadon.MAHD','=','hoadon.MAHD')->select(DB::raw('YEAR(NLHD) as nam'),DB::raw('SUM(THANHTIEN) as tong'))->groupBy(DB::raw('YEAR(NLHD)'))->orderBy(DB::raw('YEAR(NLHD)'))->get();
	}

}
