<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\sanpham;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hamcuaCl(){
    	$name = 'binhtran';
    	return view('catalog_sidebar')->with('minh',$name);
    }


    function Postproduct(Request $Product_request){

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
           

            $filenameSP = $Product_request->file('imagesSP')->getclientOriginalName();
            $filenameSPNew = $this->renameImage($filenameSP);
            $filenameGCN = $Product_request->file('imagesGCN')->getclientOriginalName();
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
            $Product_request->file('imagesSP')->move('.\resources\assets\images\products',$filenameSPNew);
            $Product_request->file('imagesGCN')->move('.\resources\assets\images\Certificate',$filenameGCNNew);
            $Product->save();

            return redirect('Addproduct')->with('thongbao','Bạn đã thêm thành công');
           
    }
    

    function Getproduct(){
        return view ('Addproduct');
    }
    function SearchResult(){
        return view('Search');
    }
    function SearchProduct(Request $Search_request){
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
        $newName = $oldName.'_'.$fileNameNew.$fileExtension;
        return $newName;
    }
    function Test(){
        $filenameSP = 'ab.jpg';
        $fileSPName = substr($filenameSP, 0, strripos($filenameSP, '.')); //get file name
        $fileSPNameEx = substr($filenameSP, strripos($filenameSP, '.')); //get file extension
        $filenameNew = (string)Time();
        echo var_dump($filenameNew.$fileSPNameEx);
    }
}
