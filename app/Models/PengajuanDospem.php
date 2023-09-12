<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanDospem extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengajuan_judul_id',
        'nip_dospem',
        'status',
    ];

    protected $table = 'pengajuan_dospem';

    function pengajuanJudul()
    {
        return $this->belongsTo(PengajuanJudul::class, 'pengajuan_judul_id', 'id');
    }

    function dosen()
    {
        return $this->belongsTo(dosen::class, 'nip_dospem', 'nip');
    }
}
