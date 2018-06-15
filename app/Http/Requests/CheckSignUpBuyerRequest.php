<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckSignUpBuyerRequest extends FormRequest
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
        // Check validate of SignUp for Buyer
        'name' => 'required|max:30',
        'phone'=> 'required|max:20',
        'number_house' => 'required|max:50',
        'email' => 'required|email|max:50',  
        'password'=> 'required|min:6',
        'ward' => 'required|max:30',
        'district' => 'required|max:20',
        'city' => 'required|max:20'
        ];
    }
}
