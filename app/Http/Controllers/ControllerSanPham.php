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
        $lssanpham = sanpham::all();
    	if($sanpham == null){
    		return redirect()->route('home');
    	}else{
    		return view('product_detail',compact($sanpham,'sanpham'),compact($lssanpham,'lssanpham'));
    	}
    	
    }

    public function editproduct($id){
        $sanpham = sanpham::find($id);
        if($sanpham == null){
            return redirect()->route('home');
        }
        return view('EditProduct',compact($sanpham,'sanpham'));
    }

    public function saveproduct(Request $request){
        $sanpham = sanpham::find($request->input('MASP'));
            
        if($request->input('giamoi')==null){
            $sanpham->GIA = $request->input('giacu');
        }else{
            $sanpham->GIACU = $sanpham->GIA;
            $sanpham->GIA = $request->input('giamoi');
        }

        if($request->hasFile('imagesSP')){
            $image = $request->file('imagesSP');
            $filename = $image->getClientOriginalName();

            $image->move('resources/assets/images/products/',$filename);
            $sanpham->HINH = $filename;
        }else{
            $sanpham->HINH = $request->input('HINH');
        }
        if($request->hasFile('imagesGCN')){
            $image = $request->file('imagesGCN');
            $filename = $image->getClientOriginalName();

            $image->move('resources/assets/images/products/',$filename);
            $sanpham->GCN = $filename;
        }else{
            $sanpham->GCN = $request->input('GCN');
        }

        $sanpham->MANB = $request->input('MANB');
        // $sanpham->HINH = $request->input('tensanpham');
        // $sanpham->GCN = $request->input('tensanpham');
        $sanpham->TENSP = $request->input('tensanpham');
        $sanpham->MALOAISP = $request->input('cbCategory');
        $sanpham->SOLUONG = $request->input('Soluong');
        $sanpham->DONVI = $request->input('cdDonvi');
        $sanpham->MOTA = $request->input('cdDonvi');

        $sanpham->save();

        return redirect()->route('home');
    }


}

