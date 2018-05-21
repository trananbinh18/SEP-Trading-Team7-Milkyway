<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\ControllerSanpham;
use Illuminate\Support\Facades\DB;
use Cart;
use App\sanpham;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\Image as Img;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hamcuaCl(){
    	$name = 'binhtran';
    	return view('catalog_sidebar')->with('minh',$name);
    }


    public function Postproduct(Request $Product_request){

        // $this->validate($Product_request,
        // [
        //     'cbCategory=>'=>'required',
        //     'tensanpham'=>'required|min:2|max:20',
        //     'Soluong'=>'required',
        //     'Giasanpham'=>'required',
        //     'cbDonvi'=>'required',
        //     'imagesSP'=>'required',
        //     'imagesGCN'=>'required',
        //     'mieutasanpham'=>'required|min:10|max:200'
        // ],
        // [
        //     'cbCategory.required'=>'Bạn chưa chọn danh mục cho sản phẩm',
        //     'tensanpham.required'=>'Bạn chưa đặt tên sản phẩm',
        //     'tensanpham.min'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        //     'tensanpham.max'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        //     'Soluong.required'=>'Bạn chưa nhập số lượng',
        //     'cbDonvi.required'=>'Bạn chưa chọn đơn vị',
        //     'imagesSP.required'=>'Bạn chưa chọn ảnh sản phẩm',
        //     'imagesGCN.required'=>'Bạn chưa chọn ảnh chứng nhận sản phẩm',
        //     'mieutasanpham.required'=>'Bạn chưa miêu tả sản phẩm',
        //     'mieutasanpham.min'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự',
        //     'mieutasanpham.max'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự'
        // ]);
           
            $imageSP = $Product_request->file('imagesSP');
            $filenameSP = $imageSP->getclientOriginalName();
            $filenameSPNew = $this->renameImage($filenameSP);
            

            $imageGCN = $Product_request->file('imagesGCN');
            $filenameGCN = $imageGCN->getclientOriginalName();
            $filenameGCNNew = $this->renameImage($filenameGCN);

            $Product = new sanpham();
            $Product->MANB = 2;
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
        $filenameSP = 'ab.jpg';
        $fileSPName = substr($filenameSP, 0, strripos($filenameSP, '.')); //get file name
        $fileSPNameEx = substr($filenameSP, strripos($filenameSP, '.')); //get file extension
        $filenameNew = (string)Time();
        echo var_dump($filenameNew.$fileSPNameEx);
    }
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
    public function CheckoutCart()
    {
        $content = Cart::content();
        $count = Cart::count();
        return view('checkout',compact('content','count'));
    }
    public function Delete($id){
        Cart::remove($id);
        return redirect()->route('shopping');
    }
    public function continueshopping(Request $re){
        foreach(Cart::content() as $row){
            $quan = $re->input($row->rowId);
            Cart::update($row->rowId, $quan);

        }
        return redirect()->route('homepage');
      
    }
}
