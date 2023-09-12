<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\revisi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RevisiSkripsiController extends Controller
{

public function viewRevisiSkripsi()
{
    $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();

        // ambil data dosen dari db
        $dosen = Dosen::all();

    $daftarRevisiSkripsi = Revisi::where('nip_penguji', Auth::user()->username)->get(); 
    return view('penguji.daftarRevisi', ['daftarRevisiSkripsi' => $daftarRevisiSkripsi]);
}
}