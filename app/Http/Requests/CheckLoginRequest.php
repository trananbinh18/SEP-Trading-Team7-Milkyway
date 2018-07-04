<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'matkhau' => 'required|min:8|max:30',
        ];
    }
    public function messages(){
        return[
            'email.required' => "Bạn chưa nhập email",
            'email.email' => "Email bạn nhập chưa đúng định dạng",
            'matkhau.required' => "Bạn chưa nhập mật khẩu",
            'matkhau.min' => "Độ dài tối thiểu của mật khẩu là 8 ký tự",
            'matkhau.max' => "Độ dài tối đa của mật khẩu là 30 ký tự",
        ];
    }
}
