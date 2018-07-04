<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\ControllerSanpham;
use App\Http\ControllerAccount;
use Illuminate\Support\Facades\DB;
use Cart;
use App\sanpham;
use App\nguoimua;
use App\hoadon;
use App\chitiethoadon;
use App\phuong;
use App\quan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\Image as Img;
use Image;
use Datetime;
use App\Http\Requests\CheckRequest;
use App\Http\Requests\CheckoutRequest;
use Carbon\Carbon;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // Thêm sản phẩm của người bán
    public function Postproduct(CheckRequest $Product_request){
           
            $imageSP = $Product_request->file('imagesSP');
            $filenameSP = $imageSP->getclientOriginalName();
            $filenameSPNew = $this->renameImage($filenameSP);
            

            $imageGCN = $Product_request->file('imagesGCN');
            $filenameGCN = $imageGCN->getclientOriginalName();
            $filenameGCNNew = $this->renameImage($filenameGCN);

            $Product = new sanpham();
            $Product->MANB = session()->get('userid');
            $Product->MALOAISP = $Product_request->cbCategory;
            $Product->TENSP    = $Product_request->tensanpham;
            $Product->SOLUONG  = (double)$Product_request->Soluong;
            $Product->GIA      = $Product_request->Giasanpham;
            $Product->DONVI    = $Product_request->cdDonvi;
            $Product->GCN      = $filenameGCNNew;
            $Product->HINH     = $filenameSPNew;
            $Product->MOTA     = $Product_request->mieutasanpham;

            $imageSP_resize = Image::make($imageSP->getRealPath());
            $imageSP_resize->resize(900, 900);
            $imageSP_resize->save('resources/assets/images/products/' .$filenameSPNew);

            $imageGCN_resize = Image::make($imageGCN->getRealPath());
            $imageGCN_resize->resize(900, 900);
            $imageGCN_resize->save('resources/assets/images/Certificate/' .$filenameGCNNew);

            $Product->save();

            $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();
            $countUnapprovedproduct = count($products);

            $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
            $countApproveproduct = count($product);

            $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
            $countHideproduct = count($productHide);

            return view('Addproduct',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct)->with('thongbao','Bạn đã thêm thành công');


           
    }
    

    public function Getproduct(){
        $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();
        $countUnapprovedproduct = count($products);

        $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
        $countApproveproduct = count($product);

        $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
        $countHideproduct = count($productHide);

        return view ('Addproduct',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct);
    }
    // Tìm kiếm sản phẩm
    public function SearchResult(){
        return view('Search');
    }
    public function SearchProduct(Request $Search_request){
        if(is_null($Search_request->Timkiem)){
            return view('Search')->with('sProduct',0);
        }
        $Search_product = DB::table('sanpham')->select('masp','maloaisp','tensp','gia','giacu','donvi','hinh')->where('tensp','like','%'.$Search_request->Timkiem.'%')->whereIn('TRANGTHAI', [1])->get();
        return view('Search')->with('sProduct',$Search_product);
    }
    public function renameImage($oldName){
        $fileName = substr($oldName, 0, strripos($oldName, '.')); //get file name
        $fileExtension = substr($oldName, strripos($oldName, '.')); //get file extension
        $fileNameNew = (string)Time();
        $newName = $fileName.'_'.$fileNameNew.$fileExtension;
        return $newName;
    }

    public function HistoryBuyProducts(){
        if(session()->get('typeuser') == 1){
            $history = DB::table('hoadon')->join('chitiethoadon','hoadon.MAHD','=','chitiethoadon.MAHD')->join('sanpham','chitiethoadon.MASP','=','sanpham.MASP')->select('TENSP','NLHD','SLUONG','DONGIA','THANHTIEN','TTHD')->where('chitiethoadon.MANB', session()->get('userid'))->whereIn('TTHD', [3,4])->get();


            $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

            $countUnapprovedproduct = count($products); 

            $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
            $countApproveproduct = count($product);

            $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

            $countHideproduct = count($productHide);   

            return view('HistoryBuyProducts',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct)->with('history', $history);
        }else{
            return view('Error');
        }
    }

   public  function Test(){
        // $filenameSP = 'ab.jpg';
        // $fileSPName = substr($filenameSP, 0, strripos($filenameSP, '.')); //get file name
        // $fileSPNameEx = substr($filenameSP, strripos($filenameSP, '.')); //get file extension
        // $filenameNew = (string)Time();
        // echo var_dump($filenameNew.$fileSPNameEx);
        // $timeA = now()->date('D-M-Y');
        // $timeA = Carbon::('Asia/Ho_Chi_Minh');
        // echo session()->get('typeuser');
        // $nHB = DB::table('hoadon')->count();
        // $year = Carbon::now('Asia/Ho_Chi_Minh')->format('Y');
        // $month = Carbon::now('Asia/Ho_Chi_Minh')->format('m');
        // $day = Carbon::now('Asia/Ho_Chi_Minh')->format('d');
        // $th = $day.$month.$year.$nHB;
        // echo $th;
    // $productSecond = DB::table('chitiethoadon')->join('sanpham','chitiethoadon.masp','=','sanpham.masp')->select('chitiethoadon.masp', 'maloaisp','tensp','gia','giacu','donvi','hinh','trangthai', DB::raw('count(*) as soluong'))->groupBy('chitiethoadon.masp','sanpham.maloaisp','sanpham.tensp','sanpham.gia','sanpham.giacu','sanpham.donvi','sanpham.hinh','sanpham.trangthai')->where('sanpham.trangthai','1')->orderBy('soluong','desc')->get();
    // echo $productSecond;
        
        // $informationMessage = DB::table('hoadon')->join('chitiethoadon','hoadon.MAHD','=','chitiethoadon.MAHD')->join('sanpham','chitiethoadon.MASP','=','sanpham.MASP')->select('TENSP','NLHD','SLUONG','DONGIA','THANHTIEN','TTHD','chitiethoadon.MANB')->get();
        // echo $informationMessage;
    }
    //Thêm sản phẩm vào trang shopping từ trang catalog
    public function AddToCart($id){
        $Productbuy = sanpham::find($id);
        Cart::add(array('id'=>$Productbuy->MASP,'name'=>$Productbuy->TENSP,'price'=>$Productbuy->GIA,'qty'=>1,'options'=>array('unit'=>$Productbuy->DONVI,'img'=>$Productbuy->HINH)));
        return back()->withInput();
    }
    
    // Thêm sản phẩm vào trang shopping từ trang chi tiết sản phẩm
    public function BuyProduct(Request $re){
        $Productbuy = sanpham::find($re->input("id"));
        if($re->input("quan") <= 999 && $re->input("quan") > 0){
            Cart::add(array('id'=>$Productbuy->MASP,'name'=>$Productbuy->TENSP,'price'=>$Productbuy->GIA,'qty'=>$re->input("quan"),'options'=>array('unit'=>$Productbuy->DONVI,'img'=>$Productbuy->HINH)));
            $content = Cart::content();
        }
        return redirect()->back();
    }
    public function Cart(){
        if(session()->get('typeuser') === 2){
            $content = Cart::content();
            return view('shopping_cart',compact('content','total'));
        }
        return view('error');
    }
    //
    public function CheckoutCart()
    {
        if(session()->get('typeuser') ==2){
            $district = DB::table('quan')->select('MAQUAN','TENQUAN')->get();
            $content = Cart::content();
            $count = Cart::count();
            return view('checkout',compact('content','count'),compact($district, 'district'));
        }else{
            return view('Error');
        }
    }
    // Thêm hóa đơn và chi tiết hóa đơn vào database
    public function postCheckout(CheckoutRequest $re){
        // Mã hóa đơn tăng theo ngày/tháng/năm/số hóa đơn
        $year = Carbon::now('Asia/Ho_Chi_Minh')->format('Y');
        $month = Carbon::now('Asia/Ho_Chi_Minh')->format('m');
        $day = Carbon::now('Asia/Ho_Chi_Minh')->format('d');
        $nHB = DB::table('hoadon')->count();
        $th = $day.$month.$year.$nHB;

        $Bill = new hoadon();
        $Bill->MANM = session()->get('userid');
        $Bill->SOHD = $th;
        $Bill->SDT = $re->phone;
        $Bill->TP = 'Hồ Chí Minh';
        $Bill->MAQUAN = $re->district;
        $Bill->MAPHUONG = $re->ward;
        $Bill->DIACHI = $re->inputaddress;
        $Bill->TONGTIEN = 0;

        $Bill->save();
        $Tongtien = 0;
        foreach (Cart::content() as $key => $value) {
            $detailbill = new chitiethoadon();
            $detailbill->MAHD = $Bill->MAHD;
            $detailbill->MANB = sanpham::find($value->id)->MANB;
            $detailbill->MASP = $value->id;
            $detailbill->SLUONG = $value->qty;
            $detailbill->THANHTIEN = $value->price*$value->qty;
            $detailbill->DONGIA = $value->price;
            $detailbill->save();
            $Tongtien = $Tongtien+$detailbill->THANHTIEN;
        }
        $Bill->TONGTIEN = $Tongtien;
        $Bill->save();
        Cart::destroy();
        return view('order')->with('SOHD',$th);
    }
    // Xóa sản phẩm trên view shopping
    public function Delete($id){
        Cart::remove($id);
        return redirect()->route('shopping');
    }
    // Xóa sản phẩm trên view master
    public function DeleteProductMaster($id){
        Cart::remove($id);
        return redirect()->route('homepage');
    }
    public function continueshopping(Request $re){
        foreach(Cart::content() as $row){
            $quan = $re->input($row->rowId);
            Cart::update($row->rowId, $quan);

        }
        return redirect()->route('homepage');
      
    }
    function sellerChangeInfomation(){
        return view('sellerChangeInfomation');
    }
}
