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
        'phone'=> 'required|max:20',
        'ward' => 'required|max:30',
        'district' => 'required|max:20',
        'inputaddress' => 'required|max:50'
        ];
    }
    public function messages(){
        return[
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.max' => 'Bạn nhập quá độ dài cho phép',
            'ward.required' => 'Bạn chưa nhập phường',
            'ward.max' => 'Bạn nhập quá độ dài cho phép',
            'district.required' => 'Bạn chưa nhập quận',
            'district.max' => 'Bạn nhập quá độ dài cho phép',
            'inputaddress.required' => 'Bạn chưa nhập địa chỉ',
            'inputaddress.max' => 'Bạn nhập quá độ dài cho phép' 
        ];
    }
}
