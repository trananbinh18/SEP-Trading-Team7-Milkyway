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

            return redirect('Addproduct')->with('thongbao','Bạn đã thêm thành công');
           
    }
    

    public function Getproduct(){
        return view ('Addproduct');
    }
    // Tìm kiếm sản phẩm
    public function SearchResult(){
        return view('Search');
    }
    public function SearchProduct(Request $Search_request){
        if(is_null($Search_request->Timkiem)){
            return view('Search')->with('sProduct',0);
        }
        $Search_product = DB::table('sanpham')->select('masp','maloaisp','tensp','gia','giacu','donvi','hinh')->where('tensp','like','%'.$Search_request->Timkiem.'%')->get();
        return view('Search')->with('sProduct',$Search_product);
    }
    public function renameImage($oldName){
        $fileName = substr($oldName, 0, strripos($oldName, '.')); //get file name
        $fileExtension = substr($oldName, strripos($oldName, '.')); //get file extension
        $fileNameNew = (string)Time();
        $newName = $fileName.'_'.$fileNameNew.$fileExtension;
        return $newName;
    }
   public  function Test(){
        // $filenameSP = 'ab.jpg';
        // $fileSPName = substr($filenameSP, 0, strripos($filenameSP, '.')); //get file name
        // $fileSPNameEx = substr($filenameSP, strripos($filenameSP, '.')); //get file extension
        // $filenameNew = (string)Time();
        // echo var_dump($filenameNew.$fileSPNameEx);
        // $timeA = now()->date('D-M-Y');
        // $timeA = Carbon::('Asia/Ho_Chi_Minh');
        echo session()->get('typeuser');
        // $nHB = DB::table('hoadon')->count();
        // $year = Carbon::now('Asia/Ho_Chi_Minh')->format('Y');
        // $month = Carbon::now('Asia/Ho_Chi_Minh')->format('m');
        // $day = Carbon::now('Asia/Ho_Chi_Minh')->format('d');
        // $th = $day.$month.$year.$nHB;
        // echo $th;
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
        Cart::add(array('id'=>$Productbuy->MASP,'name'=>$Productbuy->TENSP,'price'=>$Productbuy->GIA,'qty'=>$re->input("quan"),'options'=>array('unit'=>$Productbuy->DONVI,'img'=>$Productbuy->HINH)));
        $content = Cart::content();
        return redirect()->route('shopping');
    }
    public function Cart(){
        $content = Cart::content();
        return view('shopping_cart',compact('content','total'));
    }
    //
    public function CheckoutCart()
    {
        $content = Cart::content();
        $count = Cart::count();
        return view('checkout',compact('content','count'));
    }
    // Thêm hóa đơn và chi tiết hóa đơn vào database
    public function postCheckout(Request $re){
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
        $Bill->TP = $re->city;
        $Bill->QUAN = $re->district;
        $Bill->PHUONG = $re->ward;
        $Bill->DIACHI = $re->inputaddress;
        $Bill->save();

        foreach (Cart::content() as $key => $value) {
            $detailbill = new chitiethoadon();
            $detailbill->MAHD = $Bill->MAHD;
            $detailbill->MANB = sanpham::find($value->id)->MANB;
            $detailbill->MASP = $value->id;
            $detailbill->SOLUONG = $value->qty;
            $detailbill->THANHTIEN = $value->price*$value->qty;
            $detailbill->DONGIA = $value->price;
            $detailbill->save();
        }
        Cart::destroy();
        return view('Order')->with('SOHD',$th);
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
