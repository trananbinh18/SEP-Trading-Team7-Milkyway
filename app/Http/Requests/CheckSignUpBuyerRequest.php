<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckSignUpBuyerRequest extends FormRequest
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
        'ward' => 'required',
        'district' => 'required',
        ];
    }
    public function messages(){
        return[
        //Messages SignUp
        'name.required' => 'Bạn chưa nhập tên người dùng',
        'name.max'  => 'Độ dài tối đa là 30 kí tự',
        'phone.required' => 'Bạn chưa nhập số điện thoại',
        'phone.digits_between' => 'Số điện thoại không tồn tại',
        'phone.numeric' => 'Số điện thoại nhập không đúng định dạng',
        'number_house.required' => 'Bạn chưa nhập địa chỉ',
        'number_house.max' => 'Độ dài tối đa là 50 kí tự',
        'password.required' => 'Bạn chưa nhập mật khẩu', 
        'password.required' => 'Bạn chưa nhập mật khẩu' , 
        'password.between'=> 'Mật khẩu nên nhập từ 8 - 30 kí tự',
        'email.required' => 'Bạn chưa nhập email',
        'email.email' => 'Bạn nhập sai định dạng email',
        'email.max' => 'Bạn nhập quá độ dài cho phép',
        'ward.required' => 'Bạn chưa chọn phường',
        'district.required' => 'Bạn chưa chọn quận',
        ];
    }
}
