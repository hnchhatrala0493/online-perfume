<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest {
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */

    public function authorize() {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */

    public function rules() {
        return [
            'product_name'=>'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price'=>'required',
            'quanty'=>'required',
            'quantity_type'=>'required'
        ];
    }
}