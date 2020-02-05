<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:5',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'email khong duoc de trong',
            'email.email'=>'email khong dung dinh dang',
            'password.required'=>'mat khau khong duoc de trong',
            'password.min'=>'mat khau khong duoc nho hon 5 ky tu',
        ];
    }
}
