<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request as Controller;
use Illuminate\Http\Request;
use App\nguoimua;
use App\nguoiban;
use App\nhanvien;
use App\hoadon;
use App\chitiethoadon;
use App\sanpham;
use App\phuong;
use App\quan;
use App\admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Validator;
use App\Http\Controller\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Controllers\ControllerAccount;
use Illuminate\Support\MessageBag;

use App\Http\Requests\CheckSignUpBuyerRequest;
use App\Http\Requests\CheckSignUpSellerRequest;
use App\Http\Requests\CheckUpdateBuyerInfor;
use App\Http\Requests\CheckUpdateSellerInfor;
use App\Http\Requests\CheckUpdatePassforRequest;
use App\Http\Requests\CheckCreateAccountEmployeesRequest;
use \Crypt;


class AuthController extends Controller
{

    public function getSignUpBuyer(){
        return view('SignUp');
    }
    //Ajax ward and district
    public function ward($idquan)
    {
        $phuong = DB::table('phuong')->where('MAQUAN',$idquan)->get();
        return $phuong;
    }
  public function postSignUpBuyer(CheckSignUpBuyerRequest $SignUpBuyer_request)
  {
    $email = $SignUpBuyer_request->email;
    if($email != "") {
        $em = DB::table('nguoimua')->select('EMAIL')->where('EMAIL' , $email)->get();
        if( count($em) >= 1 )
        {
            return redirect()->back()->with('thongbao','Email nhập bị trùng');
         //$error = 'email error';
        }else{
            $user           = new nguoimua();
            $user->TENNM    = $SignUpBuyer_request->name;
            $user->SDT      = $SignUpBuyer_request->phone;
            $user->SONHA    = $SignUpBuyer_request->number_house;
            $user->MAPHUONG   = $SignUpBuyer_request->ward;
            $user->MAQUAN     = $SignUpBuyer_request->district;
            $user->TP       = 'Hồ Chí Minh';
            $user->EMAIL    = $SignUpBuyer_request->email;

            //$user->MATKHAU  = Hash::make($SignUpBuyer_request->password);
            $user->MATKHAU  = Crypt::encrypt($SignUpBuyer_request->password);

            $user->NGAYTAO  = date('Y-m-d H:i:s');
            $user->save();

            return redirect()->route('signin')->with('thanhcong','Chúc mừng bạn đã đăng kí thành công');
        }
    }    
}
function getCreateAccount(){
    if(session()->get('typeuser') == 4 ){
        $district = DB::table('quan')->select('MAQUAN','TENQUAN')->get();
        return view('CreateEmployeesAccount',compact('district', $district));
    }else{
        return view('Error');
    }
}
function postCreateAccount(CheckCreateAccountEmployeesRequest $Employees_request){
    $email = $Employees_request->email;
    if($email != ""){
        $ems = DB::table('nhanvien')->select('EMAIL')->where('EMAIL', $email)->get();
        if( count($ems) >=1) {
            return redirect()->back()->with('thongbao' ,'Email nhập đã tồn tại');
        }else{
            $users          = new nhanvien();
            $users->TENNV   = $Employees_request->name;
            $users->SDT     = $Employees_request->phone;
            $users->SONHA   = $Employees_request->number_house;
            $users->MAPHUONG= $Employees_request->ward;
            $users->MAQUAN  = $Employees_request->district;
            $users->TP      = 'Hồ Chí Minh';
            $users->EMAIL   = $Employees_request->email;
            $users->MATKHAU = $Employees_request->password;
            $users->NGAYTAO = date('Y-m-d H:i:s');

            $users->save();
            return redirect()->back()->with('thanhcong', 'Chúc mừng bạn đã tạo tài khoản thành công');
        }
    }
}

public function getSignUpSeller(){
    return view('SignUp');
}

public function postSignUpSeller(CheckSignUpSellerRequest $SignUpSeller_request){
    $email = $SignUpSeller_request->email;
    if($email != "") {
        $ems = DB::table('nguoiban')->select('EMAIL')->where('EMAIL' , $email)->get();
        if( count($ems) >= 1 )
        {
           return redirect()->back()->with('thongbao', 'Email nhập bị trùng');
         //$error = 'email error';
       }else{
        $filenameGPKD   = $SignUpSeller_request->file('image')->getclientOriginalName();
        $users          = new nguoiban();
        $users->TENNB   = $SignUpSeller_request->name;
        $users->SDT     = $SignUpSeller_request->phone;
        $users->SONHA   = $SignUpSeller_request->number_house;
        $users->MAPHUONG  = $SignUpSeller_request->ward;
        $users->MAQUAN    = $SignUpSeller_request->district;
        $users->TP      = 'Hồ Chí Minh';
        $users->EMAIL   = $SignUpSeller_request->email;

        //$users->MATKHAU = Hash::make($SignUpSeller_request->password);
        $users->MATKHAU = Crypt::encrypt($SignUpSeller_request->password);

        $users->GPKD    = $filenameGPKD;
        $SignUpSeller_request->file('image')->move('resources\assets\images\BusinessLicense',$filenameGPKD);
        $users->NGAYTAO = date('Y-m-d H:i:s');
        $users->save();

        return redirect()->route('signin')->with('thanhcong','Chúc mừng bạn đã đăng kí thành công');
        }
    }
}
public function resetPass(){
    if(session()->get('typeuser')==3){
        return view('ChangePassword_Employees');
    }else{
        return view('Error');
    }
}

//return view ResetPassword for Buyer
public function Chpass(){
    //Check Session
    if(session()->get('typeuser') == 1){ 
    $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

        $countUnapprovedproduct = count($products);

    $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

        $countApproveproduct = count($product);

    $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

        $countHideproduct = count($productHide);

        return  view('SellerPassword',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct);
    }else if(session()->get('typeuser') == 2){
        return view('BuyerPassword');
    }else{
        return view('Error');
    }
}

    public function ChangePassword(CheckUpdatePassforRequest $PW_request){
        if($PW_request->new_password == $PW_request->confirm_password)
        {
            if($PW_request->input('current_password') != session()->get('password')){
                return redirect()->back()->with('thongbao', "Nhập mật khẩu sai");
            }if(session()->get('typeuser')==1){
                $pass           = nguoiban::where('MANB', session()->get('userid'))->first();
                $pass->MATKHAU  = Crypt::encrypt($PW_request->input('new_password'));
                session(['password' => $PW_request->input('new_password')]);
                $pass->save();
                return redirect('SellerPassword')->with('thanhcong','Bạn đã sửa mật khẩu thành công');
            }else if(session()->get('typeuser')==2){
                $pass           = nguoimua::where('MANM', session()->get('userid'))->first();
                $pass->MATKHAU  = Crypt::encrypt($PW_request->input('new_password'));
                session(['password' => $PW_request->input('new_password')]);
                $pass->save();
                return redirect('BuyerPassword')->with('thanhcong','Bạn đã sửa mật khẩu thành công');
            }else if(session()->get('typeuser')==3){
                $pass           = nhanvien::where('MANV', session()->get('userid'))->first();
                $pass->MATKHAU  = Crypt::encrypt($PW_request->input('new_password'));
                session(['password' => $PW_request->input('new_password')]);
                $pass->save();
                return redirect('ResetPassword')->with('thanhcong',"Bạn đã sửa mật khẩu thành công");
            }
        }else{
            return redirect()->back()->with('thongbao', "Nhập mật khẩu sai");
        }
    }
    

//Return view Edit Information
public function inf(){
    //Load quận lên form sửa thông tin tài khoản
    $district = DB::table('quan')->select('MAQUAN','TENQUAN')->get();
    //Check session
    if(session()->get('typeuser') == 1 && session()->get('typeuser') != 2){
    //save session
        $user = nguoiban::find(session()->get('userid'));
                        session(['name' => $user->TENNB]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        session(['status'=>$user->TTNB]);

    $distr = DB::table('quan')->select('MAQUAN','TENQUAN')->get();
    $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

        $countUnapprovedproduct = count($products);

    $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

        $countApproveproduct = count($product);

    $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

        $countHideproduct = count($productHide);

        return view('SellerInformation',compact('countUnapprovedproduct',$countUnapprovedproduct),compact('countApproveproduct',$countApproveproduct))->with('countHideproduct',$countHideproduct)->with('distr', $distr);
    }else if(session()->get('typeuser')==2 && session()->get('typeuser') != 1){
            $user = nguoimua::find(session()->get('userid'));
                        session(['name' => $user->TENNM]);
                        session(['password' => Crypt::decrypt($user->MATKHAU)]);
                        session(['phone' => $user->SDT]);
                        session(['address' => $user->SONHA]);
                        session(['ward' => $user->MAPHUONG]);
                        session(['district' => $user->MAQUAN]);
                        session(['city' => $user->TP]);
                        session(['status'=>$user->TTNB]);
        return view('BuyerInformation',compact('district',$district));
    }else{
        return view('Error');
    }   
}
    public function ChangeBuyerInfor(CheckUpdateBuyerInfor $Infor_request){
        if(session()->get('typeuser') == 2){
            $user           = nguoimua::find(session()->get('userid'));
            $user->TENNM    = $Infor_request->name;
            $user->SDT      = $Infor_request->phone;
            $user->SONHA    = $Infor_request->number_house;
            $user->MAPHUONG   = $Infor_request->ward;
            $user->MAQUAN     = $Infor_request->district;
            $user->TP       = 'Hồ Chí Minh';
            $user->save();

            return redirect('BuyerInformation')->with('thanhcong', 'Cập nhật thông tin thành công');
        }else{
            return view('Error');
        }
    }
    public function ChangeSellerInfor(CheckUpdateSellerInfor $Infor_request){
        //Check Session
         if(session()->get('typeuser') == 1){
            $user           = nguoiban::where('MANB',session()->get('userid'))->first();
            $user->TENNB    = $Infor_request->name;
            $user->SDT      = $Infor_request->phone;
            $user->SONHA    = $Infor_request->number_house;
            $user->MAPHUONG   = $Infor_request->ward;
            $user->MAQUAN     = $Infor_request->district;
            $user->TP       =   'Hồ Chí Minh';
            $user->save();

            $products = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [0])->orderBy('sanpham.MASP', 'DESC')->get();

            $countUnapprovedproduct = count($products);

            $product = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [1])->orderBy('sanpham.MASP', 'DESC')->get();

            $countApproveproduct = count($product);

            $productHide = DB::table('sanpham')->join('loaisanpham' ,'loaisanpham.maloaisp', '=' , 'sanpham.maloaisp')->select('TENLOAISP','TENSP','SOLUONG','GIA','GIACU','DONVI','TRANGTHAI','HINH', 'MASP')->where('MANB',session()->get('userid'))->whereIn('TRANGTHAI', [2])->orderBy('sanpham.MASP', 'DESC')->get();

            $countHideproduct = count($productHide);

            return redirect('SellerInformation')->with('thanhcong','Cập nhật thông tin thành công');
         }else{
            return view('Error');
         }
    }
    // public function editbuyer($id){
    //     $ngmua = nguoimua::find($id);
    //     if($ngmua == null){
    //         return redirect('BuyerAccount');
    //     }else{
    //         return view('EditBuyer', compact($ngmua, 'ngmua'));
    //     }
    // }

    // public function updatebuyer(Request $Buyer_request){
    //     $ngmua = nguoimua::find($Buyer_request->input('MANM'));

    //     $ngmua->TENNM   = $Buyer_request->input('name'); 
    //     $ngmua->SDT     = $Buyer_request->input('phone');
    //     $ngmua->SONHA   = $Buyer_request->input('number_house');
    //     $ngmua->PHUONG  = $Buyer_request->input('ward');
    //     $ngmua->QUAN    = $Buyer_request->input('district');
    //     $ngmua->TP      = $Buyer_request->input('city');

    //     $ngmua->save();
    //     return redirect()->back()->with('thanhcong','Bạn đã cập nhật thành công');
    // }

public function editseller($id){
    $ngban = nguoiban::find($id);
    if($ngban == null){
        return redirect('SellerAccount');
    }else{
        return view('EditSeller', compact($ngban ,'ngban'));
    }
}
public function updateseller(Request $Seller_request){
    $ngban = nguoiban::find($Seller_request->input('MANB'));
    $ngban->TTNB    = $Seller_request->input('status');

    $ngban->save();
    return redirect()->back()->with('thanhcong','Bạn đã cập nhật thành công');
}
public function ordersdetail($id){
        //$hoadon = chitiethoadon::find($id);
    $sanpham = DB::table('chitiethoadon')->join('sanpham', 'sanpham.MASP' , '=' , 'chitiethoadon.MASP')->select('SLUONG', 'TENSP', 'MAHD','GIAMGIA','THANHTIEN','DONVI', 'sanpham.MASP')->where('MAHD' , $id)->get();
    return view('Ordersdetail', compact($sanpham,'sanpham'));
}
public function editstatus($id){
    $status = sanpham::find($id);

    return view('ChangeStatus', compact($status,'status'));
}
public function updatestatus(Request $Status_request){
    $status = sanpham::find($Status_request->input('MASP'));

    $status->TRANGTHAI = $Status_request->input('trangthai');
    $status->save();

    return redirect()->back()->with('thanhcong','Bạn đã thay đổi thành công');
}
public function changeStatusforSeller($id){
    $status = nguoiban::find($id);
    $status->TTNB = 1 ;
    $status->save();
    return redirect()->route('Account_Seller')->with('thanhcong', 'Bạn đã thay đổi thành công');
    }
public function unapprovedProducts($id){
    $sanpham = sanpham::find($id);
    $sanpham->TRANGTHAI = 1 ;
    $sanpham->save();
    return redirect()->route('listprosale')->with('thanhcong','Bạn đã thay đổi trạng thái thành công'); 
    }
}

