<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\revisi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarRevisiSkripsiController extends Controller
{

public function viewDaftarRevisiSkripsi()
{
    $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();
    
    $daftarRevisiSkripsi = Revisi::where('nim', Auth::user()->username)->wherenotnull('nip_penguji')->get();
    // dd($daftarRevisiSkripsi);
        $dosenPengujiNips = $daftarRevisiSkripsi->pluck('nip_penguji')->toArray();
        $dosenPenguji = new Dosen();
       
        return view('user.daftarRevisiSkripsi', [
            'mahasiswa' => $mahasiswa,
            'daftarRevisiSkripsi' => $daftarRevisiSkripsi,
            'dosenPenguji' => $dosenPenguji, // Mengirim data dosen penguji ke tampilan
        ]);
}
}