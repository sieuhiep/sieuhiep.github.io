<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
            'name'=>'required',
            'name'=>'unique:category,name,'.$this->id.',id',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Ten danh muc khong duoc de trong',
            'name.unique'=>'Ten danh muc da ton tai',
        ];
    }
}
