<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert(
            [
                [
                    'gambar' => 'images/kecap.png',
                    'nama_barang' => 'Kecap Manis',
                    'jumlah_barang' => 20,
                    'harga' => 5000
                ],
                [
                    'gambar' => 'images/kopi.jpg',
                    'nama_barang' => 'White Coffee',
                    'jumlah_barang' => 50,
                    'harga' => 6000
                ],
                [
                    'gambar' => 'images/indomie.jpg',
                    'nama_barang' => 'Mie Indomie',
                    'jumlah_barang' => 100,
                    'harga' => 3000
                ],
                [
                    'gambar' => 'images/sambal.jpg',
                    'nama_barang' => 'Saus Sambal ABC',
                    'jumlah_barang' => 40,
                    'harga' => 8000
                ],
                [
                    'gambar' => 'images/susu.jpg',
                    'nama_barang' => 'Ultra Milk Full Cream',
                    'jumlah_barang' => 70,
                    'harga' => 6000
                ],
                [
                    'gambar' => 'images/sedaap.jpg',
                    'nama_barang' => 'Mie Sedaap',
                    'jumlah_barang' => 100,
                    'harga' => 2500
                ],
                [
                    'gambar' => 'images/bengbeng.png',
                    'nama_barang' => 'Beng Beng',
                    'jumlah_barang' => 50,
                    'harga' => 2000
                ],
                [
                    'gambar' => 'images/youc.jpg',
                    'nama_barang' => 'You C1000',
                    'jumlah_barang' => 25,
                    'harga' => 8000
                ],
                [
                    'gambar' => 'images/yoyic.jpg',
                    'nama_barang' => 'YoyiC',
                    'jumlah_barang' => 30,
                    'harga' => 7500
                ],
                [
                    'gambar' => 'images/sariroti.jpg',
                    'nama_barang' => 'Sari Roti Sobek',
                    'jumlah_barang' => 40,
                    'harga' => 15000
                ]
            ]
        );
    }
}
