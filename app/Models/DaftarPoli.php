<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPoli extends Model
{
    use HasFactory;

    protected $table = 'daftar_poli'; // nama tabel

    protected $fillable = [
        'id_pasien',
        'id_jadwal',
        'keluhan',
        'no_antrian',
    ];

    // Relasi dengan model Pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    // Relasi dengan model JadwalPeriksa
    public function jadwalPeriksa()
    {
        return $this->belongsTo(JadwalPeriksa::class, 'id_jadwal');
    }
}
