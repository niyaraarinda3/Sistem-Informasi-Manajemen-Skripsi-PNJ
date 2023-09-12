<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\RevisiProposal;
use App\Models\Dosen;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RevisiProposalController extends Controller
{
    public function viewRevisiProposal()
    {
        // Ambil data mahasiswa dari db
        $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();

        // Ambil daftar revisi proposal dari database berdasarkan nim mahasiswa yang sedang login
        $daftarRevisiProposal = RevisiProposal::where('nim', Auth::user()->username)->get();

        // Ambil data dosen penguji dari db
        $dosenPengujiNips = $daftarRevisiProposal->pluck('nip_penguji')->toArray();
        $dosenPenguji = Dosen::whereIn('nip', $dosenPengujiNips)->get();

        return view('user.daftarRevisiProposal', [
            'mahasiswa' => $mahasiswa,
            'daftarRevisiProposal' => $daftarRevisiProposal,
            'dosenPenguji' => $dosenPenguji, // Mengirim data dosen penguji ke tampilan
        ]);
    }
}
