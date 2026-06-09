<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilKlinik extends Model
{
    protected $fillable = [
    'nama_pasien',
    'umur',
    'email',
    'no_hp'
];
}
