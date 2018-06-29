<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckRequest extends FormRequest
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
            //Check request validate of add product
        'cbCategory'=>'required',
        'tensanpham'=>'required|min:2|max:20',
        'Soluong'=>'required|numeric|digits_between:1,3',
        'Giasanpham'=>'required|numeric|digits_between:3,9',
        'cdDonvi'=>'required',
        'imagesSP'=>'required|mimes:jpeg,jpg,png',
        'imagesGCN'=>'required|mimes:jpeg,jpg,png',
        'mieutasanpham'=>'required|min:1|max:200'
        ];
    }
    public function messages(){
        return [
        //Messages Addproduct
        'cbCategory.required'=>'Bạn chưa chọn danh mục cho sản phẩm',
        'tensanpham.required'=>'Bạn chưa đặt tên sản phẩm',
        'tensanpham.min'=>'Tên sản phẩm nhập quá ngắn',
        'tensanpham.max'=>'Tên sản phẩm nhập quá độ dài cho phép',
        'Soluong.required'=>'Bạn chưa nhập số lượng',
        'Soluong.digits_between' => 'Số lượng nên nhập trong khoảng 1 - 3 kí tự',
        'Soluong.numeric' => 'Số lượng phải nhập số',
        'cdDonvi.required'=>'Bạn chưa chọn đơn vị',
        'imagesSP.required'=>'Bạn chưa chọn ảnh sản phẩm',
        'imagesSP.mimes'=>'Vui lòng chọn lại ảnh',
        'imagesGCN.required'=>'Bạn chưa chọn ảnh chứng nhận sản phẩm',
        'imagesGCN.mimes'=>'Vui lòng chọn lại ảnh',
        'mieutasanpham.required'=>'Bạn chưa miêu tả sản phẩm',
        'mieutasanpham.min'=>'Miêu tả sản phẩm phải từ 1 đến 200 ký tự',
        'mieutasanpham.max'=>'Miêu tả sản phẩm phải từ 1 đến 200 ký tự',
        'Giasanpham.required' => 'Bạn chưa nhập giá',
        'Giasanpham.numeric' => 'Giá sản phẩm phải nhập số',
        'Giasanpham.digits_between' => 'Giá sản phẩm nên nhập trong khoảng 3 - 9 kí tự',
        ];
    }
}
