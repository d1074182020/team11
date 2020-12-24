<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductsRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:100',
            'brand_id' => 'required|string|min:1|max:100',
            'class' => 'required|string|min:1|max:100',
            'price' => 'required|string|min:1|max:100',
            'line' => 'required|string|min:1|max:2'
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "商品名字 為必填",
            "name.min" => "商品名字 至少需2個字元",
            "brand_id.required" => "廠商類別 為必填",
            "brand_id.min" => "廠商類別 至少需2個字元",
            "class.required" => "總類 為必填",
            "class.min" => "總類 至少需2個字元",
            "price.required" => "價格 為必填",
            "price.min" => "價格 至少需2個字元",
            "line.required" => "有無線 為必填",
            "line.min" => "有無線 至少需1個字元",
        ];
    }
}
