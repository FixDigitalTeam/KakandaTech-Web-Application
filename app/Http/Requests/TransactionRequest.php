<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'payment_status' => 'required',
            'persentase' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'payment_status.required' => 'Payment status cannot be empty',
            'persentase.required' => 'Percentage cannot be empty'
        ];
    }
}
