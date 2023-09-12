<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSempro;
use App\Models\PengajuanSempro;
use App\Models\RevisiProposal;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DaftarSemproController extends Controller
{
    function viewDaftarSempro(Request $request)
    {
        $daftarSempro = pengajuanSempro::where('dosen_penguji1', auth::user()->username)
        ->orWhere('dosen_penguji2', auth::user()->username)
        ->orWhere('dosen_penguji3', auth::user()->username)
        ->latest('created_at') // Mengurutkan berdasarkan created_at terbaru
        ->get();

        $revisi = new RevisiProposal();
        
        // dd($daftarSempro);
        return view('penguji.daftarSempro',['daftarSempro'=> $daftarSempro,'revisi'=> $revisi]);
    }
}
