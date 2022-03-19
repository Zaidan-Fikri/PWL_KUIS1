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
                ]
            ]
        );
    }
}
