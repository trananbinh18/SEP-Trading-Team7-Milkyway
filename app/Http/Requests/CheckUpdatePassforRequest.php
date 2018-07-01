<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpdatePassforRequest extends FormRequest
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
            'current_password' => 'required|min:8|max:30',
            'new_password' => 'required|min:8|max:30',
            'confirm_password' => 'required|same:new_password',
        ];
    }
    public function messages(){
        return[
            'current_password.required' => 'Chưa nhập mật khẩu cũ',
            'current_password.min' => 'Mật khẩu nhập ngắn hơn giới hạn cho phép',
            'current_password.max' => 'Mật khẩu nhập quá giới hạn cho phép',
            'new_password.min' => 'Mật khẩu nhập ngắn hơn giới hạn cho phép',
            'new_password.max' => 'Mật khẩu nhập quá giới hạn cho phép',
            'new_password.required' => 'Chưa nhập mật khẩu mới',
            'confirm_password.same' => 'Mật khẩu nhập lại không khớp',
            'confirm_password.required' => 'Chưa nhập xác nhận lại mật khẩu',
        ];
    }
}
