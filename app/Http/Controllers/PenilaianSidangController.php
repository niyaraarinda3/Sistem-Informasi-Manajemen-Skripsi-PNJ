<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSidang;
use App\Models\PengajuanSidang;
use App\Models\revisi;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PenilaianSidangController extends Controller
{
    function viewPenilaianSidang(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();

        $penilaianSidang = pengajuanSidang::find($id);

        $skripsi = Skripsi::where('nim',  $penilaianSidang->nim)->first();

        //dd($penilaianSidang);
        return view('penguji.penilaianSidang')
        ->with('penilaianSidang', $penilaianSidang)
        ->with('mahasiswa', $mahasiswa);
    }

    function createPenilaianSidang(Request $request, $id )
    { 
        $pengajuanSidang = pengajuanSidang::find($id);
       
        if($pengajuanSidang-> dosen_penguji1 == auth::user()->username){
            $pengajuanSidang->hasilSidang()->update([
                'nilai_penguji1' => $request->nilai_penguji,
            ]);
        }

        if($pengajuanSidang-> dosen_penguji2 == auth::user()->username){
            $pengajuanSidang->hasilSidang()->update([
                'nilai_penguji2' => $request->nilai_penguji,
            ]);
        }

        if($pengajuanSidang-> dosen_penguji3 == auth::user()->username){
            $pengajuanSidang->hasilSidang()->update([
                'nilai_penguji3' => $request->nilai_penguji,
            ]);
        }

        Revisi::updateOrCreate([
            'hasil_sidang_id' => $pengajuanSidang->hasilSidang->id,
            'nip_penguji' => auth::user()->username,
            'nim' => $pengajuanSidang->mahasiswa->nim,
        ],[
            'hasil_sidang_id' => $pengajuanSidang->hasilSidang->id,
            'nim' => $pengajuanSidang->mahasiswa->nim,
            'nip_penguji' => auth::user()->username,
            'poin_revisi' => $request->revisi,
        ]);

        Session::flash('message', 'Penilaian berhasil terkirim');
        return redirect()->back();
    }
}
