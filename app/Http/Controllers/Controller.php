<?php

namespace App\Http\Controllers;
use App\sanpham;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hamcuaCl(){
    	$name = 'binhtran';
    	return view('catalog_sidebar')->with('minh',$name);
    }

    function about(){
    	return view('about');
    }
    function home(){
    	return view('home');
    }
    function Login(){
        return view('SignUp_Seller');
    }
    function Register(){
        return view('SignUp_Buyer');
    }

    function Getproduct(){
        return view ('Addproduct');
    }

    function Postproduct(Request $Product_request){
            $filenameSP = $Product_request->file('imagesSP')->getclientOriginalName();
            $filenameGCN = $Product_request->file('imagesGCN')->getclientOriginalName();
            $Product = new sanpham();
            $Product->MANB = 2;
            $Product->MALOAISP = $Product_request->cbCategory;
            $Product->TENSP    = $Product_request->tensanpham;
            $Product->SOLUONG  = (double)$Product_request->Soluong;
            $Product->GIA      = $Product_request->Giasanpham;
            $Product->DONVI    = $Product_request->cdDonvi;
            $Product->GCN      = $filenameGCN;
            $Product->HINH     = $filenameSP;
            $Product->MOTA     = $Product_request->mieutasanpham;
            $Product_request->file('imagesSP')->move('resources\assets\images\products',$filenameSP);
            $Product_request->file('imagesGCN')->move('resources\assets\images\Certificate',$filenameGCN);
            $Product->save();

           
    }

}
