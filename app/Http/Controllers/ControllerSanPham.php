<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CheckEditProducts;
use Cart;

class ControllerSanPham extends Controller
{
 
   //
    public function productdetail($id){
        $sanpham = sanpham::where('TRANGTHAI','=',1)->find($id);
        $lssanpham = sanpham::where('TRANGTHAI','=',1)->where('MALOAISP',$sanpham->MALOAISP)->get();
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

        $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();
        $countUnapprovedproduct = count($products);

        $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
        $countApproveproduct = count($product);

        $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
        $countHideproduct = count($productHide);

        return view('EditProduct',compact($sanpham,'sanpham'),compact('countUnapprovedproduct',$countUnapprovedproduct))->with('countApproveproduct',$countApproveproduct)->with('countHideproduct',$countHideproduct)->with('thongbao','Bạn đã thay đổi thành công');
    }

    public function saveproduct(CheckEditProducts $request){
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

        $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();
        $countUnapprovedproduct = count($products);

        $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();
        $countApproveproduct = count($product);

        $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();
        $countHideproduct = count($productHide);

        return redirect()->route('listpro',compact('countUnapprovedproduct',$countUnapprovedproduct))->with('countHideproduct',$countHideproduct)->with('countApproveproduct',$countApproveproduct)->with('thanhcong', 'Bạn đã thay đổi thành công sản phẩm thành công');
    }


    public function catalog(Request $request){
        if($request->query('id')==null){
            $sanpham = sanpham::where('TRANGTHAI','=',1)->paginate(16);
        }else{
            if($request->query('id')==0){
                $sanpham = sanpham::where([['GIACU', '>','GIA'],['GIACU', '<>','0'],['TRANGTHAI','=',1]])->paginate(16);
            }else{
                $sanpham = sanpham::where('MALOAISP', '=', $request->query('id'))->where('TRANGTHAI','=',1)->paginate(16);
            }
        }
        return view('catalog_sidebar',compact($sanpham,'sanpham'));
        
    }

    public function productfilter($dm,$sx){
        $dm = (int)$dm;
        if($dm!=0){
            $sanpham = sanpham::where('MALOAISP',$dm)->where('TRANGTHAI','=',1);
            if($sx=="ct"){
                $sanpham = $sanpham->orderBy('GIA','desc');
                }else if($sx=="tc"){
                $sanpham = $sanpham->orderBy('GIA');
                }else{
                $sanpham = $sanpham->orderBy('NGAYDANG','desc');
                }
        }else{
            if($sx=="ct"){
                $sanpham = sanpham::where('TRANGTHAI','=',1)->orderBy('GIA','desc');
                }else if($sx=="tc"){
                $sanpham = sanpham::where('TRANGTHAI','=',1)->orderBy('GIA');
                }else{
                $sanpham = sanpham::where('TRANGTHAI','=',1)->orderBy('NGAYDANG','desc');
                }
        }
        $sanpham = $sanpham->get()->toJson();
        return $sanpham;
    }


}

