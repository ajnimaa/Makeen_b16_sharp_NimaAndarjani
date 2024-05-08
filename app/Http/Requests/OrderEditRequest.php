<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order_name' => 'required',
            'order_code' => 'required',
            // 'order_delivery_time' => 'date|required',
            'delivery_method' => 'required'
        ];
    }
}
