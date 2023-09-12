<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanJudul extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'judul',
        'sub_judul',
        'deskripsi',
        'anggota',
        'file_referensi',
    ];

    protected $table = 'pengajuan_judul';

    function pengajuanDospem()
    {
        return $this->hasMany(PengajuanDospem::class, 'pengajuan_judul_id', 'id');
    }

    function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
