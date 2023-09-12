<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSempro;
use App\Models\HasilSempro;
use App\Models\PengajuanSidang;
use App\Models\HasilSidang;
use App\Models\Skripsi;
use App\Models\Logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailMahasiswaController extends Controller
{
     // function buat return view pengajuan sidang
    function viewDetailMahasiswa(Request $request, $id )
     {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', $id)->first();
        // dd($mahasiswa);
        // $skripsi = Skripsi::where('judul', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        $logbook = Logbook::where("nim",$id)->get()->count();
        $sempro = PengajuanSempro::where("nim", $id)->get()->count();
        // mengembalikan view dengan data
        return view('dosen.detailMahasiswa')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen)->with('sempro', $sempro)->with('logbook', $logbook);
    }

     function createDetailSempro(Request $request,$id)
    {
        dd("tet");
        // store uploaded file into storage
       


        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa', ['id'=>$id]));
    } 

     function createDetailSidang(Request $request,$id)
    {
        if ($request->nilai_sempro !=null&&is_numeric($request->nilai_sempro)) {
            $nilaiSempro = $request->nilai_sempro;
        
            // Cari atau buat record PengajuanSempro
            $pengajuanSempro = PengajuanSempro::firstOrNew(['nim' => $id]);
        
            // Memperbarui nilai_pembimbing pada model pengajuan sempro
            $pengajuanSempro->nilai_pembimbing = $nilaiSempro;
            $pengajuanSempro->save();
        
            // Debugging
            if ($pengajuanSempro->wasRecentlyCreated) {
                info("PengajuanSempro baru telah dibuat.");
            } else {
                info("PengajuanSempro telah ditemukan dan diperbarui.");
            }
        }
        
        if ($request->nilai_skripsi !=null&&is_numeric($request->nilai_skripsi)) {
            $nilaiSkripsi = $request->nilai_skripsi;
        
            // Cari atau buat record PengajuanSidang
            $pengajuanSidang = PengajuanSidang::firstOrNew(['nim' => $id]);
        
            // Memperbarui nilai_pembimbing pada model pengajuan sidang
            $pengajuanSidang->nilai_pembimbing = $nilaiSkripsi;
            $pengajuanSidang->save();
        
            // Debugging
            if ($pengajuanSidang->wasRecentlyCreated) {
                info("PengajuanSidang baru telah dibuat.");
            } else {
                info("PengajuanSidang telah ditemukan dan diperbarui.");
            }
        }
        
        
        
        
        
        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa', ['id'=>$id]));
    } 

    function updateStatusPendaftaran(Request $request, $id)
    {
        pengajuanSempro::where('nim', $id)->update([
            "status"=>$request->status,
        ]);

        Session::flash('message', 'Berhasil!');
        return redirect(route('dosen.detail-mahasiswa'));
    }
}
