<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert(
            [
                [
                    'nama' => 'Zaidan',
                    'jenis_kelamin' => 'Laki-Laki',
                    'no_hp' => '085172936492'
                ],
                [
                    'nama' => 'Ciendy',
                    'jenis_kelamin' => 'Perempuan',
                    'no_hp' => '081162738491'
                ],
                [
                    'nama' => 'Yaldika',
                    'jenis_kelamin' => 'Laki-Laki',
                    'no_hp' => '083128379173'
                ],
                [
                    'nama' => 'Lidya',
                    'jenis_kelamin' => 'Perempuan',
                    'no_hp' => '081232859123'
                ]
            ]
        );
    }
}
