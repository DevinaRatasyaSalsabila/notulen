<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulen extends Model
{
    use HasFactory;

    protected $table = 'notulen';

    protected $fillable = [
        'id_user',
        'id_bagian',
        'tgl',
        'tahunajaran',
        'agenda',
        'kesimpulan',
        'id_guru',
        'status',
        'tempat',
        'jenis_undangan',
    ];
}
