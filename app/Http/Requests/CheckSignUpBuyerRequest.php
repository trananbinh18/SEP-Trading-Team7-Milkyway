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
        'ward' => 'required|max:30',
        'district' => 'required|max:20',
        'city' => 'required|max:20|regex:/[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u',
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
        'password.between'=> 'Mật khẩu nên nhập từ 8 - 30 kí tự',
        'ward.required' => 'Bạn chưa nhập phường',
        'ward.max' => 'Bạn nhập quá độ dài cho phép',
        'district.required' => 'Bạn chưa nhập quận',
        'district.max' => 'Bạn nhập quá độ dài cho phép',
        'city.required' => 'Bạn chưa nhập thành phố',
        'city.max' => 'Bạn nhập quá độ dài cho phép',
        'city.regex' => 'Bạn nhập sai định dạng',
        'email.required' => 'Bạn chưa nhập email',
        'email.email' => 'Bạn nhập sai định dạng email',
        'email.max' => 'Bạn nhập quá độ dài cho phép',
        ];
    }
}
