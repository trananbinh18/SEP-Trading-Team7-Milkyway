<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\sanpham;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;

class ControllerSanPham extends Controller
{
 
   //
    public function productdetail($id){
    	$sanpham = sanpham::find($id);
    	if($sanpham == null){
    		return redirect()->route('home');
    	}else{
    		return view('product_detail',compact($sanpham,'sanpham'));
    	}
    	
    }

    public function editproduct($id){
        $sanpham = sanpham::find($id);
        if($sanpham == null){
            return redirect()->route('home');
        }
        return view('EditProduct',compact($sanpham,'sanpham'));
    }
}

