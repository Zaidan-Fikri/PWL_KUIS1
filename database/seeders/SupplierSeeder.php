<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(
            [
                [
                    'pemimpin' => 'Abdul',
                    'nama_perusahaan' => 'PT.Sejahtera',
                    'no_perusahaan' => '0593'
                ],
                [
                    'pemimpin' => 'Abdul',
                    'nama_perusahaan' => 'PT.Sentosa',
                    'no_perusahaan' => '0534'
                ],
                [
                    'pemimpin' => 'Abdi',
                    'nama_perusahaan' => 'PT.Makmur',
                    'no_perusahaan' => '0546'
                ],
                [
                    'pemimpin' => 'Bima',
                    'nama_perusahaan' => 'PT.Jaya',
                    'no_perusahaan' => '05756'
                ]
                
            ]
        );
    }
}
