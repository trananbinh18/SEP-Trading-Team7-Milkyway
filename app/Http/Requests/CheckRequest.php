<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Check validate of SignUp
        'name' => 'required',
        'phone'=> 'required',
        'number_house' => 'required',
        'email' => 'required|email|unique:users,email', 
        'password'=> 'required|min:6',
        'ward' => 'required',
        'district' => 'required',
        'city' => 'required',
        //Check validate of Add Product
        'cbCategory=>'=>'required',
        'tensanpham'=>'required|min:2|max:20',
        'Soluong'=>'required',
        'Giasanpham'=>'required',
        'cbDonvi'=>'required',
        'imagesSP'=>'required',
        'imagesGCN'=>'required',
        'mieutasanpham'=>'required|min:10|max:200'
        ];
    }
    public function messages(){
        return [

        //Messages SignUp
        'name.required' => 'Bạn chưa nhập tên người dùng',
        'phone.required' => 'Bạn chưa nhập số điện thoại',
        'number_house.required' => 'Bạn chưa nhập địa chỉ',
        'password.required' => 'Bạn chưa nhập mật khẩu', 
        'password.required' => 'Bạn chưa nhập mật khẩu' , 
        'password.min'=> 'Mật khẩu phải có ít nhất 6 kí tự',
        'ward.required' => 'Bạn chưa nhập phường',
        'district.required' => 'Bạn chưa nhập quận',
        'city.required' => 'Bạn chưa nhập thành phố',
        'email.required' => 'Bạn chưa nhập email',
        'email.email' => 'Bạn nhập sai định dạng',
        'email.unique' => 'Email nhập bị trùng',
        //Messages Addproduct
        'cbCategory.required'=>'Bạn chưa chọn danh mục cho sản phẩm',
        'tensanpham.required'=>'Bạn chưa đặt tên sản phẩm',
        'tensanpham.min'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        'tensanpham.max'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        'Soluong.required'=>'Bạn chưa nhập số lượng',
        'cbDonvi.required'=>'Bạn chưa chọn đơn vị',
        'imagesSP.required'=>'Bạn chưa chọn ảnh sản phẩm',
        'imagesGCN.required'=>'Bạn chưa chọn ảnh chứng nhận sản phẩm',
        'mieutasanpham.required'=>'Bạn chưa miêu tả sản phẩm',
        'mieutasanpham.min'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự',
        'mieutasanpham.max'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự',
        'Giasanpham.required' => 'Bạn chưa nhập giá',

        ];
    }
}
