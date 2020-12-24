<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
                'home' => 'required|string|min:2|max:100',
                'phone' => 'required|string|min:8|max:100',
                'ceo' => 'required|string|min:2|max:100'

        ];
    }
    public function messages()
    {
        return [
            "name.required" => "廠商名字 為必填",
            "name.min" => "廠商名字 至少需2個字元",
            "home.required" => "地址 為必填",
            "home.min" => "地址 至少需2個字元",
            "phone.required" => "廠商電話 為必填",
            "phone.min" => "廠商電話 至少需2個字元",
            "ceo.required" => "董事長 為必填",
            "ceo.min" => "董事長 至少需2個字元",
        ];
    }
}

