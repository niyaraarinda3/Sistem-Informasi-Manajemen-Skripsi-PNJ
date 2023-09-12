<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PenyerahanAlat;
use App\Models\Revisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenyerahanAlatController extends Controller
{
    // function buat return view pengajuan sidang
    public function viewPenyerahanAlat(Request $request)
    {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();

        $revisi = Revisi::where('nim', Auth::user()->username)->get();

        foreach ($revisi as $revisi) {
            $status = $revisi->status; // Ini akan bekerja
        }

        // $revisi = Revisi::where('nim', Auth::user()->username)->get();
        // mengembalikan view dengan data
        return view('user.penyerahanAlat', compact('mahasiswa', 'dosen', 'revisi'));
    }

    function createPenyerahanAlat(Request $request)
    {
        // store uploaded file into storage
        $pathPkkp = $request->file('sertifikat_pkkp')->store('/sertifikat_pkkp4');
        $pathLomba = $request->file('sertifikat_lomba')->store('/sertifikat_lomba');
        $pathKejuaraan = $request->hasFile('sertifikat_kejuaraan') ? $request->file('sertifikat_kejuaraan')->store('/sertifikat_kejuaraan') : null;
        $pathToeic = $request->file('sertifikat_toeic')->store('/sertifikat_toeic');
        $pathF13 = $request->file('file_f13')->store('/file_f13');
        $pathF14 = $request->file('file_f14')->store('/file_f14');
        $pathOrganisasi = $request->hasFile('sertifikat_organisasi') ? $request->file('sertifikat_organisasi')->store('/sertifikat_organisasi') : null;
        // create reccord on table pengajuan sidang
        $penyerahanAlat = PenyerahanAlat::create([
        'nim' => $request->user()->username,
        'judul' => $request->judul,
        'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
        'anggota' => isset($request->anggota) ? $request->anggota : null,
        "link_video" => $request->link_video,
        'sertifikat_pkkp' => $pathPkkp,
        'sertifikat_lomba' => $pathLomba,
        'sertifikat_kejuaraan' => $pathKejuaraan,
        'sertifikat_toeic' => $pathToeic,
        'file_f13' => $pathF13,
        'file_f14' => $pathF14,
        'sertifikat_organisasi' => $pathOrganisasi,
    ]);

     Mahasiswa::find($request->user()->username)->update([
            'status_id' => '9',
        ]);
        

    Session::flash('message', 'Penyerahan Alat berhasil terkirim');
    return redirect(route('user.penyerahan-alat'));
    }  

    function getApi($id){
        $penyerahanAlat = PenyerahanAlat::find($id);
        $mahasiswa = Mahasiswa::where("nim",$penyerahanAlat->nim)->first();
        $data = ["nim"=>$mahasiswa->nim,"nama"=>$mahasiswa->nama,"prodi"=>$mahasiswa->prodi,"kelas"=>$mahasiswa->kelas,"judul"=>$penyerahanAlat->judul,"subJudul"=>$penyerahanAlat->sub_judul];
        return response($data,200);
    }
     
}
