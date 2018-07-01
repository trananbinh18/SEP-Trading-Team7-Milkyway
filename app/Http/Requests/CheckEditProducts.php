<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckEditProducts extends FormRequest
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
            //Check Edit
            'tensanpham'=>'min:2|max:20',
            'giacu'=>'numeric|digits_between:3,9',
            'Soluong'=>'numeric|digits_between:1,3',
            'imagesSP' => 'mimes:jpeg,jpg,png',
            'imagesGCN' => 'mimes:jpeg,jpg,png',
            'mieutasanpham'=>'min:1|max:200',
        ];
    }
    public function messages(){
        return[
            //Check vietnamese
            'tensanpham.min' => 'Tên sản phẩm nhập quá ngắn',
            'tensanpham.max' => 'Tên sản phẩm nhập quá độ dài cho phép',
            'giacu.numeric' => 'Giá sản phẩm nhập không đúng định dạng',
            'giacu.digits_between' => 'Giá sản phẩm nên nhập trong khoảng 3 - 9 kí tự',
            'Soluong.numeric' => 'Số lượng nhập không đúng định dạng',
            'Soluong.digits_between' => 'Số lượng nên nhập trong khoảng 1 - 3 kí tự',
            'imagesSP.mimes' => 'Vui lòng chọn lại ảnh',
            'imagesGCN.mimes' => 'Vui lòng chọn lại ảnh',
            'mieutasanpham.min'=>'Miêu tả sản phẩm phải từ 1 đến 200 ký tự',
            'mieutasanpham.max'=>'Miêu tả sản phẩm phải từ 1 đến 200 ký tự',
        ];
    }
}
