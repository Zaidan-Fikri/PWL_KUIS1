<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert(
            [
                [
                    'nama' => 'Muhammad',
                    'no_hp' => '0818920351612'
                ],
                [
                    'nama' => 'Zaidan',
                    'no_hp' => '0852563718920'
                ],
                [
                    'nama' => 'Yaldika',
                    'no_hp' => '0832371829301'
                ]
            ]
        );
    }
}
