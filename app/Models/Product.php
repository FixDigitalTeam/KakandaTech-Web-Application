<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_product';

    protected $fillable = [
        'nama_product'
    ];

    public function package()
    {
        return $this->hasMany(Package::class, 'id_product', 'id_product');
    }
}
