<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request as Controller;
use Illuminate\Http\Request;
use App\nguoimua;
use App\nguoiban;
use Illuminate\Support\Facades\Validator;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthController extends Controller
{
	
    function getSignUpBuyer()
    {
      return view('SignUp');
    }
    function postSignUpBuyer(Request $SignUp_request)
    {
    // $this->validate($SignUp_request,[
    //  'name' => 'required|min:3', 
    //  'phone'=> 'required|min:10', 
    //  'number_house' => 'required',
    //  'emai' => 'required|email|unique:users,email', 
    //  'password'=> 'required|min:6'


    // ],[
    //  'name.required' => 'Bạn chưa nhập tên người dùng',
    //  'name.min'=> 'Tên người dùng phải có ít nhất 3 kí tự',
    //  'phone.required' => 'Bạn chưa nhập số điện thoại',
    //  'phone.min' => 'Số điện thoại phải có ít nhất 10 kí tự' , 
    //  'address.required' => 'Bạn chưa nhập địa chỉ', 
    //  'password.required' => 'Bạn chưa nhập mật khẩu' , 
    //  'password.min'=> 'Mật khẩu phải có ít nhất 6 kí tự' 
    //  ]);

    $user = new nguoimua();
    $user->TENNM = $SignUp_request->name;
    $user->SĐT = $SignUp_request->phone;
    $user->SONHA = $SignUp_request->number_house;
    $user->PHUONG = $SignUp_request->ward;
    $user->QUAN = $SignUp_request->district;
    $user->TP = $SignUp_request->city;
    $user->EMAIL = $SignUp_request->email;
    $user->MATKHAU = $SignUp_request->password;
    $user->NGAYTAO = date('Y-m-d H:i:s');
    $user->save();

    return redirect('home')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
  }
  function getSignUpSeller(){
    return view('SignUp');
  }

  function postSignUpSeller(Request $SignUpSeller_request){
    // $this->validate($SignUp_request,[
    //  'name' => 'required|min:3', 
    //  'phone'=> 'required|min:10', 
    //  'number_house' => 'required',
    //  'emai' => 'required|email|unique:users,email', 
    //  'password'=> 'required|min:6'


    // ],[
    //  'name.required' => 'Bạn chưa nhập tên người dùng',
    //  'name.min'=> 'Tên người dùng phải có ít nhất 3 kí tự',
    //  'phone.required' => 'Bạn chưa nhập số điện thoại',
    //  'phone.min' => 'Số điện thoại phải có ít nhất 10 kí tự' , 
    //  'address.required' => 'Bạn chưa nhập địa chỉ', 
    //  'password.required' => 'Bạn chưa nhập mật khẩu' , 
    //  'password.min'=> 'Mật khẩu phải có ít nhất 6 kí tự' 
    //  ]);
 $filenameGPKD = $SignUpSeller_request->file('image')->getclientOriginalName();
    $user = new nguoiban();
    $user->TENNB = $SignUpSeller_request->name;
    $user->SĐT = $SignUpSeller_request->phone;
    $user->SONHA = $SignUpSeller_request->number_house;
    $user->PHUONG = $SignUpSeller_request->ward;
    $user->QUAN = $SignUpSeller_request->district;
    $user->TP = $SignUpSeller_request->city;
    $user->EMAIL = $SignUpSeller_request->email;
    $user->MATKHAU = $SignUpSeller_request->password;
    $user->GPKD = $filenameGPKD;
    $SignUpSeller_request->file('image')->move('resources\assets\images\BusinessLicense',$filenameGPKD);
    $user->NGAYTAO = date('Y-m-d H:i:s');
    $user->save();

    return redirect('home')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
  }
}
