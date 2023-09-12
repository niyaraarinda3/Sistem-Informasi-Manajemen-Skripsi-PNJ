<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSempro;
use App\Models\PengajuanSempro;
use App\Models\RevisiProposal;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PenilaianSemproController extends Controller
{
    function viewPenilaianSempro(Request $request, $id )
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();

        $penilaianSempro = pengajuanSempro::find($id);
        
        $skripsi = Skripsi::where('nim',  $penilaianSempro->nim)->first();

        //dd($skripsi);

        return view('penguji.penilaianSempro')
        ->with('penilaianSempro', $penilaianSempro)
        ->with('mahasiswa', $mahasiswa);
    }

    function createPenilaianSempro(Request $request, $id )
    {

        $pengajuanSempro = pengajuanSempro::find($id);

        if($pengajuanSempro-> dosen_penguji1 == auth::user()->username){
            $pengajuanSempro->hasilSempro()->update([
                'nilai_penguji1' => $request->nilai_penguji,
            ]);
        }

        if($pengajuanSempro-> dosen_penguji2 == auth::user()->username){
            $pengajuanSempro->hasilSempro()->update([
                'nilai_penguji2' => $request->nilai_penguji,
            ]);
        }

        if($pengajuanSempro-> dosen_penguji3 == auth::user()->username){
            $pengajuanSempro->hasilSempro()->update([
                'nilai_penguji3' => $request->nilai_penguji,
            ]);
        }

        RevisiProposal::updateOrCreate([
            'hasil_sempro_id' => $pengajuanSempro->hasilSempro->id,
            'nip_penguji' => auth::user()->username,
            'nim' => $pengajuanSempro->mahasiswa->nim,
        ],[
            'hasil_sempro_id' => $pengajuanSempro->hasilSempro->id,
            'nim' => $pengajuanSempro->mahasiswa->nim,
            'nip_penguji' => auth::user()->username,
            'poin_revisi' => $request->revisi,
        ]);

        Session::flash('message', 'Penilaian berhasil terkirim');
        return redirect()->back();
    }
}
