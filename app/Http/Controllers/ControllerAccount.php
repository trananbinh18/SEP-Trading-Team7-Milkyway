<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class ControllerAccount extends Controller
{
    function Login(Request $re){
    	//Lấy dữ liệu từ DB và kiểm tra email nhập từ form có DB hay không, nếu có thì lưu vào $user
    	$user = DB::table('nhanvien')->select('email')->where('email','=',$re->email)->get();
    	//Kiểm tra $user, nếu có dữ liệu tức là email có tồn tại trong hệ thống, nếu k tức là email k có trong hệ thống
    	if(!empty($user)){
    		//Nếu email có tồn tại trong hệ thống thì Đăng nhập thành công và trả về view Home (định danh route: homepage)
    		return redirect()->route('homepage');
    	}
    	//Nếu email không tồn tại thì trở về trang Đăng nhập
    	return redirect()->back();
    }
}
