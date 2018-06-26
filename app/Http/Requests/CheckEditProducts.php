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
            'imagesSP' => 'mimes:jpeg,jpg,png',
            'imagesGCN' => 'mimes:jpeg,jpg,png',
        ];
    }
    public function messages(){
        return[
            //Check vietnamese
            'imagesSP.mimes' => 'Vui lòng chọn lại ảnh',
            'imagesGCN.mimes' => 'Vui lòng chọn lại ảnh',
        ];
    }
}
