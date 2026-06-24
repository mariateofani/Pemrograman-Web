<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HasilPanen;

class HasilPanenSeeder extends Seeder
{
    public function run(): void
    {
        HasilPanen::create([
            'nama_komoditas' => 'Padi',
            'jumlah_kg' => 500,
            'tanggal_panen' => '2026-06-20'
        ]);

        HasilPanen::create([
            'nama_komoditas' => 'Jagung',
            'jumlah_kg' => 300,
            'tanggal_panen' => '2026-06-21'
        ]);

        HasilPanen::create([
            'nama_komoditas' => 'Kedelai',
            'jumlah_kg' => 250,
            'tanggal_panen' => '2026-06-22'
        ]);
    }
}