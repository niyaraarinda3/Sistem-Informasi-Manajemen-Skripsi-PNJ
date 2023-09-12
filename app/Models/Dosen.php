<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'email',
    ];
    protected $primaryKey = 'nip';
    protected $keyType = "string";

    protected $table = 'dosen';

    public function mahasiswa()
    {
        // return Mahasiswa::where("nip_dospem",$this->nip)->get();
        return $this->hasMany(Mahasiswa::class, "nip", "nip_dospem");
    }
}
