<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'kelas',
        'tahun_ajaran',
        'email',
        'status_id',
        'nip_dospem',
    ];
    protected $primaryKey = 'nim';
    protected $keyType = "string";

    function Skripsi()
    {
        return $this->hasOne(Skripsi::class, 'nim', 'nim');
    }
    function dosen()
    {
        return $this->belongsTo(dosen::class, 'nip_dospem', 'nip');
    }

    function status()
    {
        return $this->belongsTo(status::class, 'status_id', 'id');
    }


    protected $table = 'mahasiswa';
}
