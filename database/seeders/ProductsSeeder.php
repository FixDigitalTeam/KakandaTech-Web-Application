<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'nama_product' => 'Content Writing',
                'created_at' => now()
            ],
            [
                'nama_product' => 'Website Development',
                'created_at' => now()
            ],
            [
                'nama_product' => 'Mobile Development',
                'created_at' => now()
            ]
        ]);
    }
}
