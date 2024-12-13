<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:5'],
            'description' => ['required', 'max:255'],
            'sale_price' => ['required', 'gt:0'],
            'photo' => ['image','mimes:jpg,jpeg,png'],
            'stock' => ['required']
        ];
    }
}
