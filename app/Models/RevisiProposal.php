<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisiProposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasil_sempro_id',
        'nim',
        'nip_penguji',
        'judul',
        'link_demo',
        'poin_revisi',
    ];

    protected $table = 'revisi_proposal';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }

    public function penguji()
    {
        return $this->belongsTo(Dosen::class, "nip_penguji", "nip");
    }

    function hasilSempro()
    {
        return $this->belongsTo(HasilSempro::class, 'hasil_sempro_id', 'id');
    }
}
