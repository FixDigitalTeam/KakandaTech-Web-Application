<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_package' => 'integer',
            'id_product' => 'integer',
            'phone_number' => 'string|max:13',
            'payment_total' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'phone_number.required' => 'Nomor telepon tidak boleh kosong',
            'phone_number.max' => 'Nomor telepon tidak boleh lebih dari 13'
        ];
    }
}
