<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nip_dospem',
        'judul',
        'file_skripsi'
    ];

    protected $table = 'skripsi';

    function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    function dosenPembimbing()
    {
        return $this->belongsTo(Dosen::class, 'nip', 'nip_dospem');
    }
}
