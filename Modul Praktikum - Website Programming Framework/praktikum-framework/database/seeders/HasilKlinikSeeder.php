<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilKlinikSeeder extends Seeder
{
    public function run()
    {
        DB::table('hasil_kliniks')->insert([
            [
                'nama_pasien' => 'Budi Santoso',
                'umur' => 25,
                'email' => 'budi@gmail.com',
                'no_hp' => '081234567890'
            ],
            [
                'nama_pasien' => 'Siti Aminah',
                'umur' => 30,
                'email' => 'siti@gmail.com',
                'no_hp' => '081298765432'
            ],
            [
                'nama_pasien' => 'Andi Wijaya',
                'umur' => 22,
                'email' => 'andi@gmail.com',
                'no_hp' => '081211223344'
            ]
        ]);
    }
}