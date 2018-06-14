<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;
use Illuminate\Database\Eloquent\Model;
use Cart;

class ControllerSanPham extends Controller
{
 
   //
    public function productdetail($id){
        $sanpham = sanpham::find($id);
        $lssanpham = sanpham::all();
        if($sanpham == null){
            return redirect()->route('homepage');
        }else{
            return view('product_detail',compact($sanpham,'sanpham'),compact($lssanpham,'lssanpham'));
        }
        
    }

    public function editproduct($id){
        $sanpham = sanpham::find($id);
        if($sanpham == null){
            return redirect()->route('homepage');
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
        $sanpham->TRANGTHAI = $request->input('cbChangeStatus');
        $sanpham->MALOAISP = $request->input('cbCategory');
        $sanpham->SOLUONG = $request->input('Soluong');
        $sanpham->DONVI = $request->input('cdDonvi');
        $sanpham->MOTA = $request->input('mieutasanpham');

        $sanpham->save();

        return redirect()->route('listpro');
    }


    public function catalog(){
        $sanpham = sanpham::paginate(12);
        return view('catalog_sidebar',compact($sanpham,'sanpham'));
    }

    public function productfilter($dm,$sx){
        $dm = (int)$dm;
        if($dm!=0){
            $sanpham = sanpham::where('MALOAISP',$dm);
            if($sx=="ct"){
                $sanpham = $sanpham->orderBy('GIA','desc');
                }else if($sx=="tc"){
                $sanpham = $sanpham->orderBy('GIA');
                }else{
                $sanpham = $sanpham->orderBy('NGAYDANG','desc');
                }
        }else{
            if($sx=="ct"){
                $sanpham = sanpham::orderBy('GIA','desc');
                }else if($sx=="tc"){
                $sanpham = sanpham::orderBy('GIA');
                }else{
                $sanpham = sanpham::orderBy('NGAYDANG','desc');
                }
        }
        $sanpham = $sanpham->get()->toJson();
        return $sanpham;
    }


}

