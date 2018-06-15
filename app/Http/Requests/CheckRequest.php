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
        'Soluong'=>'required',
        'Giasanpham'=>'required',
        'cdDonvi'=>'required',
        'imagesSP'=>'required',
        'imagesGCN'=>'required',
        'mieutasanpham'=>'required|min:10|max:200'
        ];
    }
    public function messages(){
        return [
        //Messages Addproduct
        'cbCategory.required'=>'Bạn chưa chọn danh mục cho sản phẩm',
        'tensanpham.required'=>'Bạn chưa đặt tên sản phẩm',
        'tensanpham.min'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        'tensanpham.max'=>'Tên sản phẩm phải từ 2 đến 50 ký tự',
        'Soluong.required'=>'Bạn chưa nhập số lượng',
        'cdDonvi.required'=>'Bạn chưa chọn đơn vị',
        'imagesSP.required'=>'Bạn chưa chọn ảnh sản phẩm',
        'imagesGCN.required'=>'Bạn chưa chọn ảnh chứng nhận sản phẩm',
        'mieutasanpham.required'=>'Bạn chưa miêu tả sản phẩm',
        'mieutasanpham.min'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự',
        'mieutasanpham.max'=>'Miêu tả sản phẩm phải từ 10 đến 200 ký tự',
        'Giasanpham.required' => 'Bạn chưa nhập giá',
        ];
    }
}
