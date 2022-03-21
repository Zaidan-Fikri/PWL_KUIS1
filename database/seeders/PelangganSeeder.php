<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert(
            [
                [
                    'nama' => 'Zaidan',
                    'jenis_kelamin' => 'Laki-Laki',
                    'no_hp' => '085172936492'
                ],
                [
                    'nama' => 'Nita',
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
                ],
                [
                    'nama' => 'Windy',
                    'jenis_kelamin' => 'Perempuan',
                    'no_hp' => '085172936421'
                ],
                [
                    'nama' => 'Santy',
                    'jenis_kelamin' => 'Perempuan',
                    'no_hp' => '085172934521'
                ],
                [
                    'nama' => 'Januari',
                    'jenis_kelamin' => 'Laki-Laki',
                    'no_hp' => '085172936492'
                ],
                [
                    'nama' => 'Aziz',
                    'jenis_kelamin' => 'Laki-Laki',
                    'no_hp' => '085172936492'
                ]
                
            ]
        );
    }
}
