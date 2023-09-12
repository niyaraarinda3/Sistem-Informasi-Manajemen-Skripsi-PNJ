<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'rincian_kegiatan',
        'rencana_pencapaian',
        'feedback',
        'status',
        'dokumentasi',
        'media',
    ];

    protected $table = 'logbook';

    function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'nim', 'nim');
    }
}
