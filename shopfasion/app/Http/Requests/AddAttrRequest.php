<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAttrRequest extends FormRequest
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
            'attr_name'=>'required|unique:attribute,name',
        ];
    }
    public function messages()
    {
        return [
            'attr_name.required'=>'tên thuộc tính không được trống',
            'attr_name.unique'=>'tên thuộc tính đã tồn tại ',
        ];
    }
}
