<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        'phone'=> 'required|numeric|digits_between:9,20',
        'inputaddress' => 'required|max:50'
        ];
    }
    public function messages(){
        return[
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.numeric' => 'Giá trị nhập không đúng định dạng',
            'phone.digits_between' => 'Số điện thoại phải từ 9 đến 20 số',
            'inputaddress.required' => 'Bạn chưa nhập địa chỉ',
            'inputaddress.max' => 'Bạn nhập quá độ dài cho phép' 
        ];
    }
}
