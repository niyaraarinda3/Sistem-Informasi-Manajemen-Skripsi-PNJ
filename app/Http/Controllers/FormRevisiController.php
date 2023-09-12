<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Revisi;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class FormRevisiController extends Controller
{
    function viewFormRevisi(Request $request, $id)
     {
        // ambil data mahasiswa dari db
       
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // Ambil nilai lama dari sesi jika tersedia
        $oldJudul = $request->session()->get('old_judul');
        $oldLinkVidio = $request->session()->get('old_link_vidio');
        
        $revisi = Revisi::find($id);
        // dd($revisi);
        // Menghapus nilai lama dari sesi setelah menggunakannya
        $request->session()->forget(['old_judul', 'old_link_vidio']);

        // Mengembalikan view dengan data
        return view('user.formrevisi')
            ->with('mahasiswa', $mahasiswa)
            ->with('dosen', $dosen)
            ->with('oldJudul', $oldJudul)
            ->with('oldLinkVidio', $oldLinkVidio)
            ->with('revisi', $revisi);
    }

    function createFormRevisi(Request $request, $id)
    {
         // Simpan data lama ke dalam sesi
        $request->session()->flash('old_judul', $request->judul);
        $request->session()->flash('old_link_vidio', $request->link_vidio);

        // create reccord on table pengajuan revisi
        $nip = Mahasiswa::find(Auth::user()->username)->nip_dospem;
        // mark
        $revisi = Revisi::find($id)->update([
            'nim'=>Auth::user()->username,
            'judul' => $request->judul,
            'link_vidio' => $request->link_vidio,
            'status' => "menunggu persetujuan",
        ]);

        Mahasiswa::find($request->user()->username)->update([
            'status_id' => '8',
        ]);
        
        Session::flash('message', 'pengajuan revisi berhasil terkirim');
        return redirect(route('user.daftar-revisi-skripsi'));
    }
    function getApi($id)
    {
        $formRevisi = FormRevisi::find($id);
        $mahasiswa = Mahasiswa::where("nim", $formRevisi->nim)->first();
        
        // Buat array data untuk dijadikan response
        $data = [
            "judul" => $formRevisi->nim,
            "link_vidio" => $formRevisi->nama,
            // ... tambahkan data lainnya sesuai kebutuhan ...
        ];

        // Return response dalam bentuk JSON
        return Response::json($data, 200);
    }
}
