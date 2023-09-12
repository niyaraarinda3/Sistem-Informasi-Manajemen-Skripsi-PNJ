<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasil_sidang_id',
        'nim',
        'nip_penguji',
        'judul',
        'link_vidio',
        'poin_revisi',
        'feedback',
        'status',
    ];

    protected $table = 'revisi';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }

    public function penguji()
    {
        return $this->belongsTo(Dosen::class, "nip_penguji", "nip");
    }

    function hasilSidang()
    {
        return $this->belongsTo(HasilSidang::class, 'hasil_sidang_id', 'id');
    }
}


