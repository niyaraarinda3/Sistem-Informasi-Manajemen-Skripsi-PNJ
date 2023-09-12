<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'pengajuan_sempro_id',
        'nilai_penguji1',
        'nilai_penguji2',
        'nilai_penguji3',
        'nilai',
    ];

    protected $table = 'hasil_sempro';

    function pengajuanSempro()
    {
        return $this->belongsTo(PengajuanSempro::class, 'pengajuan_sempro_id', 'id');
    }

    public function revisiProposal()
    {  
        return $this->hasMany(RevisiProposal::class);
    }
}
