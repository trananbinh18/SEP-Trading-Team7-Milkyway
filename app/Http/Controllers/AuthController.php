<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request as Controller;
use Illuminate\Http\Request;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Validator;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use\App\Http\Controllers\ControllerAccount;

class AuthController extends Controller
{

function getSignUpBuyer()
{
  return view('SignUp');
}
function postSignUpBuyer(Request $SignUpBuyer_request)
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

$email = $SignUpBuyer_request->email;
if($email != "") {
    $em = DB::table('nguoimua')->select('EMAIL')->where('EMAIL' , $email)->get();
    if( count($em) >= 1 )
    {
        return redirect()->back()->with('thongbao', 'Email nhập bị trùng');
         //$error = 'email error';
    }else{
        $user = new nguoimua();
        $user->TENNM = $SignUpBuyer_request->name;
        $user->SĐT = $SignUpBuyer_request->phone;
        $user->SONHA = $SignUpBuyer_request->number_house;
        $user->PHUONG = $SignUpBuyer_request->ward;
        $user->QUAN = $SignUpBuyer_request->district;
        $user->TP = $SignUpBuyer_request->city;
        $user->EMAIL = $SignUpBuyer_request->email;
        // $user->MATKHAU = Hash::make($SignUpBuyer_request->password);
        $user->MATKHAU = $SignUpBuyer_request->password;
        $user->NGAYTAO = date('Y-m-d H:i:s');
        $user->save();

        return redirect('home')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
    }
}    
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
$email = $SignUpSeller_request->email;
if($email != "") {
    $ems = DB::table('nguoiban')->select('EMAIL')->where('EMAIL' , $email)->get();
    if( count($ems) >= 1 )
    {
     return redirect()->back()->with('thongbao', 'Email nhập bị trùng');
         //$error = 'email error';
 }else{
    $filenameGPKD = $SignUpSeller_request->file('image')->getclientOriginalName();
    $users = new nguoiban();
    $users->TENNB = $SignUpSeller_request->name;
    $users->SĐT = $SignUpSeller_request->phone;
    $users->SONHA = $SignUpSeller_request->number_house;
    $users->PHUONG = $SignUpSeller_request->ward;
    $users->QUAN = $SignUpSeller_request->district;
    $users->TP = $SignUpSeller_request->city;
    $users->EMAIL = $SignUpSeller_request->email;
        // $users->MATKHAU = Hash::make($SignUpSeller_request->password);
    $users->MATKHAU = $SignUpSeller_request->password;
    $users->GPKD = $filenameGPKD;
    $SignUpSeller_request->file('image')->move('resources\assets\images\BusinessLicense',$filenameGPKD);
    $users->NGAYTAO = date('Y-m-d H:i:s');
    $users->save();

    return redirect('home')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
    }
}
}
//return view ResetPassword
function Chpass(){
    return  view('ResetPassword');
}
function ChangePassword(Request $PW_request){
if($PW_request->new_password = $PW_request->confirm_password)
{
    if($PW_request->input('current_password') != session()->get('password')){
        return redirect()->back()->with('thongbao', "Nhập mật khẩu sai");
    }else if(session()->get('typeuser')==1){
        $pass = nguoimua::where('MANM', session()->get('userid'))->first();
        $pass->MATKHAU = $PW_request->new_password;
    }else if(session()->get('typeuser')==2){
        $pass = nguoimua::where('MANM', session()->get('userid'))->first();
        $pass->MATKHAU = $PW_request->new_password;
    }
}
$pass->save();
return redirect('Password')->with('thongbao','Bạn đã sửa mật khẩu thành công');
}

//Return view Edit Information
function inf(){
    return view('EditCustomerInformation');
}
function ChangeInfor(Request $Infor_request){
if(session()->get('typeuser') == 1){
    $user = nguoiban::where('MANB',session()->get('userid'))->first();
    $user->TENNB = $Infor_request->name;
    $user->SDT = $Infor_request->phone;
    $user->SONHA = $Infor_request->number_house;
    $user->PHUONG = $Infor_request->ward;
    $user->QUAN = $Infor_request->district;
    $user->TP = $Infor_request->city;
}else if(session()->get('typeuser') == 2){
    $user = nguoimua::where('MANM',session()->get('userid'))->first();
    $user->TENNM = $Infor_request->name;
    $user->SDT = $Infor_request->phone;
    $user->SONHA = $Infor_request->number_house;
    $user->PHUONG = $Infor_request->ward;
    $user->QUAN = $Infor_request->district;
    $user->TP = $Infor_request->city;
}else{
    $user = nhanvien::where('MANV',session()->get('userid'))->first();
    $user->TENNV = $Infor_request->name;
    $user->SDT = $Infor_request->phone;
    $user->SONHA = $Infor_request->number_house;
    $user->PHUONG = $Infor_request->ward;
    $user->QUAN = $Infor_request->district;
    $user->TP = $Infor_request->city;
}
$user->save();
return redirect()->back()->with('thongbao', 'Cập nhật thông tin thành công');
}
}

