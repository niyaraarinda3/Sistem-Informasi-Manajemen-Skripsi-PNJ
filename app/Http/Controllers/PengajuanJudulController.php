<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanDospem;
use App\Models\PengajuanJudul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanJudulController extends Controller
{
    // function buat return view pengajuan judul
    function viewPengajuanJudul(Request $request)
    {
        // ambil data mahasiswa dari db
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('user.pengajuanJudul')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }

    // create pengajuan judul
    function createPengajuanJudul(Request $request)
    {
        // store uploaded file into storage
        $path = $request->file('jurnal')->store('/jurnal');
        // create reccord on table pengajuan judul
        $pengajuanJudul = PengajuanJudul::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'deskripsi' => $request->deskripsi,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
            'file_referensi' => $path,
        ]);

        Mahasiswa::find($request->user()->username)->update([
            'status_id' => '1',
        ]);
        
        // create reccord on table pengajuan dospem
        PengajuanDospem::create([
            'pengajuan_judul_id' => $pengajuanJudul->id,
            'nip_dospem' => $request->dosen1,
            'status' => 'pengajuan'
        ]);
        PengajuanDospem::create([
            'pengajuan_judul_id' => $pengajuanJudul->id,
            'nip_dospem' => $request->dosen2,
            'status' => 'pengajuan'
        ]);
        PengajuanDospem::create([
            'pengajuan_judul_id' => $pengajuanJudul->id,
            'nip_dospem' => $request->dosen3,
            'status' => 'pengajuan'
        ]);

        Session::flash('message', 'Pengajuan judul berhasil terkirim!');
        return redirect(route('user.pengajuan-judul'));
    }
}
