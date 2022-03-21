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
                    'nama_perusahaan' => 'Sejahtera',
                    'no_perusahaan' => '0593'
                ],
                [
                    'pemimpin' => 'Abdul',
                    'nama_perusahaan' => 'Sentosa',
                    'no_perusahaan' => '0590'
                ]
                
            ]
        );
    }
}
