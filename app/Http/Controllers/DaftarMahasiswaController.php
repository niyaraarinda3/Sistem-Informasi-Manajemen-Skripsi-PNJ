<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanDospem;
use App\Models\PengajuanJudul;
use App\Http\Controllers\Controller;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarMahasiswaController extends Controller
{
    // return view daftar mahasiswa
    function viewDaftarMahasiswa(Request $request)
    {
        // ambil data pengajuan judul
        $pengajuanDospem = PengajuanDospem::where('nip_dospem', $request->user()->username)->where('status', 'pengajuan')
            ->with(['pengajuanJudul' => function ($query) {
                $query->with('mahasiswa');
            }])->get();

        // ambil data mahasiswa bimbingan dari table skripsi
        $mahasiswaBimbingan = Skripsi::where('nip_dospem', $request->user()->username)->with('mahasiswa')->get();

        // mengembalikan view dengan data
        return view('dosen.daftarMahasiswa')->with('pengajuanDospem', $pengajuanDospem)->with('mahasiswaBimbingan', $mahasiswaBimbingan);
    }

    function terimaPermintaanBimbingan(Request $request, $idPengajuanJudul)
    {
        // ubah status pengajuan dospem dari table pengajuan judul
        $pengajuanJudul = PengajuanJudul::where('id', $idPengajuanJudul)->first();
        $pengajuanDospem = PengajuanDospem::where('pengajuan_judul_id', $idPengajuanJudul)->get();
        foreach ($pengajuanDospem as $val) {
            if ($val->nip_dospem == $request->user()->username) {
                $val->status = 'diterima';
                $val->save();
            } else {
                $val->status = 'ditolak';
                $val->save();
            }
        }

        // buat reccord table skripsi
        Skripsi::create([
            'nim' => $pengajuanJudul->nim,
            'nip_dospem' => $request->user()->username,
            'judul' => $pengajuanJudul->judul,
            'file_skripsi' => null,
        ]);

        Mahasiswa::where('nim', $pengajuanJudul->nim)->update([
            'nip_dospem' => $request->user()->username,
        ]);

        return redirect()->back();
    }

    function tolakPermintaanBimbingan(Request $request, $idPengajuanJudul)
    {
        // ubah status pengajuan dospem dari table pengajuan judul
        $pengajuanDospem = PengajuanDospem::where('pengajuan_judul_id', $idPengajuanJudul)->get();
        foreach ($pengajuanDospem as $val) {
            if ($val->nip_dospem == $request->user()->username) {
                $val->status = 'ditolak';
                $val->save();
                break;
            }
        }
        return redirect()->back();
    }
}
