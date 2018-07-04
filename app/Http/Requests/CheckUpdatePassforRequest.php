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
            'current_password.min' => 'Độ dài tối thiếu là 8 kí tự',
            'current_password.max' => 'Độ dài tối đa là 30 kí tự',
            'new_password.min' => 'Độ dài tối thiểu là 8 kí tự',
            'new_password.max' => 'Đồ dài tối đa là 30 kí tự',
            'new_password.required' => 'Chưa nhập mật khẩu mới',
            'confirm_password.same' => 'Mật khẩu nhập lại không khớp',
            'confirm_password.required' => 'Chưa nhập xác nhận lại mật khẩu',
        ];
    }
}
