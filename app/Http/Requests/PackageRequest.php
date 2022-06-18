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

    public function messages()
    {
        return [
            'nama_package.required' => 'Package name cannot be empty',
            'harga.required' => 'Price cannot be empty', 
            'harga.integer' => 'Price must be a number',
            'deskripsi.required' => 'Description cannot be empty', 
            'waktu_pengerjaan.required' => 'Deadline cannot be empty',
            'waktu_pengerjaan.integer' => 'Deadline must be a number', 
            'id_product.required' => 'Product cannot be empty',
            'nama_package.max' => 'Package name must not be greater than 40 character',
            'deskripsi.max' => 'Description must not be grater than 150 character',
            'keuntungan_1.max' => 'Benefit 1 must not be greater than 80 character', 
            'keuntungan_2.max' => 'Benefit 2 must not be greater than 80 character',
            'keuntungan_3.max' => 'Benefit 3 must not be greater than 80 character',
            'keuntungan_4.max' => 'Benefit 4 must not be greater than 80 character',
            'keuntungan_5.max' => 'Benefit 5 must not be greater than 80 character',
            'keuntungan_6.max' => 'Benefit 6 must not be greater than 80 character',
            'keuntungan_7.max' => 'Benefit 7 must not be greater than 80 character',
            'keuntungan_8.max' => 'Benefit 8 must not be greater than 80 character', 
        ];
    }
}
