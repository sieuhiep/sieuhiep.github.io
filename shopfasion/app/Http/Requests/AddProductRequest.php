<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'product_code'=>'required|min:3|unique:product,product_code',
            'product_name'=>'required|min:3',
            'product_price'=>'required|numeric',
            'product_img'=>'image',
        ];
    }
    public function messages()
    {
        return [
            'product_code.required'=>'Ma san pham khong duoc de trong',
            'product_code.unique'=>'Mã sản phẩm đã tồn tại ',
            'product_code.min'=>'Ma san pham khong duoc nho hon 3 ky tu',
            'product_name.required'=>'Ten san pham khong duoc de trong',
            'product_name.min'=>'Ten san pham khong duoc nho hon 3 ky tu',
            'product_price.required'=>'Gia san pham khong duoc de trong',
            'Product_price.numeric'=>'Gia san pham khong dung dinh dang',
            'product_img.image'=>'File anh khong dung dinh dang',
        ];
    }
}
