<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Produk::factory()->create([
            'Nama_Produk' => 'Produk A',
            'Tipe_Produk' => 'Tipe A',
            'Status_Produk' => 'Tersedia',
            'Deskripsi' => 'Deskripsi produk A',
            'Harga_Awal' => '10000',
            'Diskon' => '5',
            'Harga_Diskon' => '9500',
            'Stok' => '50'
        ]);   //error ini//
    }
}
