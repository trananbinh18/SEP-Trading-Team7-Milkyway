<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //

    public function editproduct($id){
    	//Lúc này tạo biến để lưu lại bảng sản phẩm
    	$sanpham = App\sanpham::all()->toArray();

    	//lúc này là trả lại view đồng thời truyền cho view biến sanpham mới tạo, cái hàm truyền biến này có thể sai các bạn có thể tham khảo trên mạng.
    	return view('EditProduct',compact($sanpham));
    }
    public function edit(Request $request){

    }
}
