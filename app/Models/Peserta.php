<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta_notulen';

    protected $fillable = [
        'id_notulen',
        'nama_peserta',
        'jabatan',
        'jabatan_rapat',
        'ttd',
        'urutan',
    ];
}
