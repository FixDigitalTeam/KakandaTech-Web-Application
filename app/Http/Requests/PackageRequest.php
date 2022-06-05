<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
        'nama_package' => 'required|string|max:40',
        'harga' => 'required|integer', 
        'deskripsi' => 'required|max:150', 
        'keuntungan_1' => 'max:80', 
        'keuntungan_2' => 'max:80',
        'keuntungan_3' => 'max:80',
        'keuntungan_4' => 'max:80',
        'keuntungan_5' => 'max:80',
        'keuntungan_6' => 'max:80',
        'keuntungan_7' => 'max:80',
        'keuntungan_8' => 'max:80', 
        'waktu_pengerjaan' => 'required|integer', 
        'id_product' => 'required'
        ];
    }
}
