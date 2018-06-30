<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpdateSellerInfor extends FormRequest
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
            //
        'name' => 'max:30',
        'phone'=> 'numeric|digits_between:9,20',
        'number_house' => 'max:50',   
        ];
    }
    public function messages(){
        return[
        'name.max'  => 'Bạn nhập quá độ dài cho phép',
        'phone.digits_between' => 'Số điện thoại không tồn tại',
        'phone.numeric' => 'Số điện thoại nhập không đúng định dạng',
        'number_house.max' => 'Bạn nhập quá độ dài cho phép',
        ];
    }
}
