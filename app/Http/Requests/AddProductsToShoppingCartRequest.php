<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductsToShoppingCartRequest extends FormRequest
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
            'quan'=>'numeric|digits_between:1,3',
        ];
    }
    public function messages(){
        return[
            'quan.numeric'=> 'Số lượng nhập sai định dạng',
            'quan.digits_between' => 'Số lượng nên nhập trong khoảng 1 đến 3 kí tự',
        ];
    }
}
