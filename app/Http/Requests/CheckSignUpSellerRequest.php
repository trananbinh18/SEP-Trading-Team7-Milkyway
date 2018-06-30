<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckSignUpSellerRequest extends FormRequest
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
        // Check validate of SignUp for Buyer
        'name' => 'required|max:30',
        'phone'=> 'required|numeric|digits_between:9,20',
        'number_house' => 'required|max:50',
        'email' => 'required|email|max:50',
        'password'=> 'required|between:8,30',
        'image' => 'required|mimes:jpeg,jpg,png',
        'ward' => 'required',
        'district' => 'required',
        ];
    }
    public function messages(){
        return[
        //Messages SignUp
        'name.required' => 'Bạn chưa nhập tên người dùng',
        'name.max'  => 'Bạn nhập quá độ dài cho phép',
        'phone.required' => 'Bạn chưa nhập số điện thoại',
        'phone.digits_between' => 'Số điện thoại không tồn tại',
        'phone.numeric' => 'Số điện thoại nhập không đúng định dạng',
        'number_house.required' => 'Bạn chưa nhập địa chỉ',
        'number_house.max' => 'Bạn nhập quá độ dài cho phép',
        'password.required' => 'Bạn chưa nhập mật khẩu', 
        'password.required' => 'Bạn chưa nhập mật khẩu' , 
        'password.min'=> 'Mật khẩu nên nhập từ 8 - 32 kí tự',
        'email.required' => 'Bạn chưa nhập email',
        'email.email' => 'Bạn nhập sai định dạng email',
        'email.max' => 'Bạn nhập quá độ dài cho phép',
        'image.required' => 'Bạn chưa chọn hình',
        'image.mimes' => 'Vui lòng nhập lại ảnh',
        'ward.required' => 'Bạn chưa chọn phường',
        'district.required' => 'Bạn chưa chọn quận',
        ];
    } 
}
