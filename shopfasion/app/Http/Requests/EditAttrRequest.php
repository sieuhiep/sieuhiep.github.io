<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAttrRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'attr_name'=>'required|unique:attribute,name,'.$this->id,
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
