<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request as Controller;
use Illuminate\Http\Request;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;
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

    $user = new nguoimua();
    $user->TENNM = $SignUpBuyer_request->name;
    $user->SĐT = $SignUpBuyer_request->phone;
    $user->SONHA = $SignUpBuyer_request->number_house;
    $user->PHUONG = $SignUpBuyer_request->ward;
    $user->QUAN = $SignUpBuyer_request->district;
    $user->TP = $SignUpBuyer_request->city;
    $user->EMAIL = $SignUpBuyer_request->email;
    $user->MATKHAU = Hash::make($SignUpBuyer_request->password);
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
    $users = new nguoiban();
    $users->TENNB = $SignUpSeller_request->name;
    $users->SĐT = $SignUpSeller_request->phone;
    $users->SONHA = $SignUpSeller_request->number_house;
    $users->PHUONG = $SignUpSeller_request->ward;
    $users->QUAN = $SignUpSeller_request->district;
    $users->TP = $SignUpSeller_request->city;
    $users->EMAIL = $SignUpSeller_request->email;
    $users->MATKHAU = Hash::make($SignUpSeller_request->password);
    $users->GPKD = $filenameGPKD;
    $SignUpSeller_request->file('image')->move('resources\assets\images\BusinessLicense',$filenameGPKD);
    $users->NGAYTAO = date('Y-m-d H:i:s');
    $users->save();

    return redirect('home')->with('thongbao','Chúc mừng bạn đã đăng kí thành công');
  }

   function ChangePassword(Request $PW_request){
        session_start();
                //Đổi mật khẩu
        if($PW_request->new_password = $PW_request->confirm_password)
        {
            //echo "Exactly";
            if($PW_request->input('current_password') != $_SESSION['user']->MATKHAU){
                return redirect()->back()->with('thongbao', "Nhập mật khẩu sai");
                }else{
                    $_SESSION['user']->MATKHAU = $PW_request->input('new_password');

                    $_SESSION['user']->save();

                    return redirect('Password')->with('thongbao','Bạn đã sửa mật khẩu thành công');
            }
        }
    }

     function ChangeInforDetail(){
        session_start();
        if($_SESSION['typeuser']==1){
            $data = nguoiban::select('TENNB','SĐT','SONHA','PHUONG','QUAN','TP')->get();
            return redirect('Information')->with('data',$data);
        }else if($_SESSION['typeuser']==2){
            $data = nguoimua::select('TENNM','SĐT','SONHA','PHUONG','QUAN','TP')->get();
            return redirect('Information')->with('data',$data);
        }else if($_SESSION['typeuser']==3){
            $data = nhanvien::select('TENNV','SĐT','SONHA','PHUONG','QUAN','TP')->get();
            return redirect('Information')->with('data',$data);
        }else{
            return redirect('Information');
        }
    }

     function ChangeInfor(Request $Infor_request){
        session_start();
        echo session_status();
        if($_SESSION['typeuser']==1){
        //Thay đổi thông tin cho người bán
            $_SESSION['user']->TENNB = $Infor_request->name;
            $_SESSION['user']->SĐT =  $Infor_request->phone;
            $_SESSION['user']->SONHA =  $Infor_request->number_house;
            $_SESSION['user']->PHUONG =  $Infor_request->ward;
            $_SESSION['user']->QUAN =  $Infor_request->district;
            $_SESSION['user']->TP =  $Infor_request->city;
            $_SESSION['user']->save();
            return redirect('Information')->with('thongbao','Bạn đã sửa thông tin thành công');
            }else if($_SESSION['typeuser']==2){
                //Thay đổi thông tin cho người mua
                $_SESSION['user']->TENNM = $Infor_request->name;
                $_SESSION['user']->SĐT =  $Infor_request->phone;
                $_SESSION['user']->SONHA =  $Infor_request->number_house;
                $_SESSION['user']->PHUONG =  $Infor_request->ward;
                $_SESSION['user']->QUAN =  $Infor_request->district;
                $_SESSION['user']->TP =  $Infor_request->city;
                $_SESSION['user']->save();
                return redirect('Information')->with('thongbao','Bạn đã sửa thông tin thành công');
                }else if($_SESSION['typeuser']==3){
                    //Thay đổi thông tin cho nhân viên
                    $_SESSION['user']->TENNV = $Infor_request->name;
                    $_SESSION['user']->SĐT =  $Infor_request->phone;
                    $_SESSION['user']->SONHA =  $Infor_request->number_house;
                    $_SESSION['user']->PHUONG =  $Infor_request->ward;
                    $_SESSION['user']->QUAN =  $Infor_request->district;
                    $_SESSION['user']->TP =  $Infor_request->city;
                    $_SESSION['user']->save();
                    return redirect('Information')->with('thongbao','Bạn đã sửa thông tin thành công');
            }else
                return redirect('home');
        }
}
