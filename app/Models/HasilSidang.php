<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'pengajuan_sidang_id',
        'nilai_penguji1',
        'nilai_penguji2',
        'nilai_penguji3',
        'nilai',
    ];

    protected $table = 'hasil_sidang';

    function pengajuanSidang()
    {
        return $this->belongsTo(PengajuanSidang::class, 'pengajuan_sidang_id', 'id');
    }

    public function revisi()
    {
        return $this->hasMany(Revisi::class);
    }
}
