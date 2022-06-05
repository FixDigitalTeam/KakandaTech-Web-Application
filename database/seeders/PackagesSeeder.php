<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'nama_package' => 'Regular',
                'slug' => 'regular',
                'harga' => '375000',
                'deskripsi' => 'Paket ini cocok bagi para pelanggan yang ingin mengoptimalkan website tanpa perlu riset keyword',
                'keuntungan_1' => 'Mendapatkan 25 Artikel 500 Kata',
                'keuntungan_2' => 'Gratis Optimasi Keyword dan Judul',
                'keuntungan_3' => 'Artikel Original Tanpa Copas',
                'keuntungan_4' => 'Human Friendly',
                'keuntungan_5' => 'Gratis Revisi',
                'keuntungan_6' => 'Gratis Pasang Gambar',
                'keuntungan_7' => 'Bonus 2 Artikel 500 Kata',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '12',
                'id_product' => '1',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Basic SEO',
                'slug' => 'basic-seo',
                'harga' => '800000',
                'deskripsi' => 'Paket ini cocok bagi para pelanggan yang ingin mengoptimalkan website dengan artikel SEO',
                'keuntungan_1' => 'Mendapatkan 50 Artikel 500 Kata',
                'keuntungan_2' => 'Gratis Optimasi Keyword dan Judul',
                'keuntungan_3' => 'Tersedia Laporan Plagiarism Checker',
                'keuntungan_4' => 'Human Friendly & SEO Friendly',
                'keuntungan_5' => 'Gratis Revisi',
                'keuntungan_6' => 'Gratis Pasang Gambar',
                'keuntungan_7' => 'Bonus 5 Artikel 500 Kata',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '26',
                'id_product' => '1',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Deep SEO',
                'slug' => 'deep-seo',
                'harga' => '1550000',
                'deskripsi' => 'Paket ini cocok bagi para pelanggan yang ingin artikel SEO tanpa pusing riset keyword dan setting SEO',
                'keuntungan_1' => 'Mendapatkan 100 Artikel 500 Kata',
                'keuntungan_2' => 'Gratis Optimasi Keyword dan Judul',
                'keuntungan_3' => 'Dicek Menggunakan Plagiarism Checker Premium',
                'keuntungan_4' => 'Human Friendly & SEO Friendly',
                'keuntungan_5' => 'Gratis Revisi',
                'keuntungan_6' => 'Gratis Pasang Gambar',
                'keuntungan_7' => 'Bonus 10 Artikel 500 Kata',
                'keuntungan_8' => 'Gratis Meta Description',
                'waktu_pengerjaan' => '46',
                'id_product' => '1',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Web Basic',
                'slug' => 'web-basic',
                'harga' => '600000',
                'deskripsi' => 'Paket ini cocok bagi pelajar dan mahasiswa yang ingin membuat website skala kecil untuk keperluan tugas',
                'keuntungan_1' => 'Gratis Bimbingan Pemakaian',
                'keuntungan_2' => 'Gratis Setup Konten',
                'keuntungan_3' => 'Gratis Manual Book',
                'keuntungan_4' => 'Gratis Maintenance 1 Minggu',
                'keuntungan_5' => 'Tersedia Laporan Testing',
                'keuntungan_6' => '',
                'keuntungan_7' => '',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '14',
                'id_product' => '2',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Web Medium',
                'slug' => 'web-medium',
                'harga' => '1500000',
                'deskripsi' => 'Paket ini cocok bagi pelanggan yang ingin membuat situs sistem informasi seperti blog, forum, dan lainnya',
                'keuntungan_1' => 'Gratis Setup Konten',
                'keuntungan_2' => 'Gratis 4 Artikel 500 Kata',
                'keuntungan_3' => 'Optimasi SEO Dasar',
                'keuntungan_4' => 'Setting Domain TLD',
                'keuntungan_5' => 'Hosting Unlimited 1 Tahun',
                'keuntungan_6' => 'Gratis Maintenance 2 Minggu',
                'keuntungan_7' => 'Dipandu Selama 7x24 Jam',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '30',
                'id_product' => '2',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Web Pro',
                'slug' => 'web-pro',
                'harga' => '2500000',
                'deskripsi' => 'Paket ini cocok bagi pelanggan yang ingin membuat website perusahaan supaya terlihat lebih profesional',
                'keuntungan_1' => 'Gratis Setup Konten',
                'keuntungan_2' => 'Optimasi SEO Dasar',
                'keuntungan_3' => 'Gratis Pembuatan Manual Book',
                'keuntungan_4' => 'Setting Domain TLD',
                'keuntungan_5' => 'Hosting Unlimited 2 Tahun',
                'keuntungan_6' => 'Gratis Maintenance 1 Bulan',
                'keuntungan_7' => 'Dipandu Selama 7x24 Jam',
                'keuntungan_8' => 'Gratis Artikel SEO',
                'waktu_pengerjaan' => '45',
                'id_product' => '2',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Mobile Basic',
                'slug' => 'mobile-basic',
                'harga' => '600000',
                'deskripsi' => 'Paket ini cocok bagi pelajar dan mahasiswa yang ingin membuat aplikasi mobile skala kecil untuk keperluan tugas',
                'keuntungan_1' => 'Gratis Bimbingan Pemakaian',
                'keuntungan_2' => 'Gratis Setup Konten',
                'keuntungan_3' => 'Gratis Manual Book',
                'keuntungan_4' => 'Gratis Maintenance 1 Minggu',
                'keuntungan_5' => 'Tersedia Laporan Testing',
                'keuntungan_6' => '',
                'keuntungan_7' => '',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '14',
                'id_product' => '3',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Mobile Medium',
                'slug' => 'mobile-medium',
                'harga' => '1500000',
                'deskripsi' => 'Paket ini cocok bagi pelanggan yang ingin membuat aplikasi mobile dengan sistem transaksi sederhana untuk kasir toko',
                'keuntungan_1' => 'Gratis Setup Konten',
                'keuntungan_2' => 'Dipandu Selama Proses Instalasi',
                'keuntungan_3' => 'Tersedia Manual Book',
                'keuntungan_4' => 'Gratis Maintenance 2 Minggu',
                'keuntungan_5' => 'Dipandu Selama 7x24 Jam',
                'keuntungan_6' => '',
                'keuntungan_7' => '',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '30',
                'id_product' => '3',
                'created_at' => now()
            ],
            [
                'nama_package' => 'Mobile Pro',
                'slug' => 'mobile-pro',
                'harga' => '2500000',
                'deskripsi' => 'Paket ini cocok bagi pelanggan yang ingin membuat aplikasi mobile untuk perusahaan dan sistem transaksi online',
                'keuntungan_1' => 'Gratis Setup Konten',
                'keuntungan_2' => 'Gratis Akun Google Play Premium',
                'keuntungan_3' => 'Gratis Upload Google Play Store',
                'keuntungan_4' => 'Tersedia Manual Book',
                'keuntungan_5' => 'Gratis Maintenance 2 Minggu',
                'keuntungan_6' => 'Dipandu Selama 7x24 Jam',
                'keuntungan_7' => 'Gratis Panduan Instalasi',
                'keuntungan_8' => '',
                'waktu_pengerjaan' => '60',
                'id_product' => '3',
                'created_at' => now()
            ]
        ]);
    }
}
