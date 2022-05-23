<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_package';

    protected $fillable = [
        'nama_package', 'harga', 'deskripsi', 'keuntungan_1', 'keuntungan_2',
        'keuntungan_3','keuntungan_4','keuntungan_5','keuntungan_6','keuntungan_7',
        'keuntungan_8', 'waktu_pengerjaan', 'id_product'
    ];

    public function product() 
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
