<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'judul',
        'sub_judul',
        'anggota',
        'jadwal_sidang',
        'dosen_penguji1',
        'dosen_penguji2',
        'dosen_penguji3',
        'ruang',
        'status',
        'nilai_pembimbing',
    ];

    protected $table = 'pengajuan_sidang';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }
    public function hasilSidang()
    {
        return $this->hasOne(HasilSidang::class, "pengajuan_sidang_id", "id");
    }

    public function dosenPenguji1()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji1", "nip");
    }

    public function dosenPenguji2()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji2", "nip");
    }

    public function dosenPenguji3()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji3", "nip");
    }
    public function isPengujiSudahMenilai(){
        $nip = Auth::user()->username;

        if($this->dosen_penguji1 == $nip){
            return $this->hasilSidang->nilai_penguji1 != null ? true : false;
        }

        if($this->dosen_penguji2 == $nip){
            return $this->hasilSidang->nilai_penguji2 != null ? true : false;
        }

        if($this->dosen_penguji3 == $nip){
            return $this->hasilSidang->nilai_penguji3 != null ? true : false;
        }

        return false;

    }

    public function nilaiPenguji(){
        $nip = Auth::user()->username;

        if($this->dosen_penguji1 == $nip){
            return $this->hasilSidang->nilai_penguji1 != null ? $this->hasilSidang->nilai_penguji1 : "";
        }

        if($this->dosen_penguji2 == $nip){
            return $this->hasilSidang->nilai_penguji2 != null ? $this->hasilSidang->nilai_penguji2 : "";
        }

        if($this->dosen_penguji3 == $nip){
            return $this->hasilSidang->nilai_penguji3 != null ? $this->hasilSidang->nilai_penguji3 : "";
        }

        return "";

    }

}
