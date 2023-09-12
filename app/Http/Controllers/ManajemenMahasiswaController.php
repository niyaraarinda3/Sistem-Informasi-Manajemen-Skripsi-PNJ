<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManajemenMahasiswaController extends Controller
{
    function viewManajemenMahasiswa(Request $request)
    {
        // ambil data mahasiswa bimbingan dari table Mahasiswa

        $daftarMahasiswa = Mahasiswa::get();
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('admin.manajemenMahasiswa')->with('daftarMahasiswa', $daftarMahasiswa)->with('dosen', $dosen);
    }

    function createManajemenMahasiswa(Request $request)
    {
        $mahasiswa = Mahasiswa::updateOrCreate(
            ['nim' => $request->nim],
            [
                'nim' => $request->nim,
                'nip_dospem' => $request->dosenPembimbing,
            ]
        );
        return redirect(route('admin.create.manajemen-mahasiswa'));
    }

    function getApi($nim)
    {
        $mahasiswa = Mahasiswa::where("nim", $nim)->first();
        $data = [
            "nim" => $mahasiswa->nim,
            "nama" => $mahasiswa->nama,
            "prodi" => $mahasiswa->prodi,
            "kelas" => $mahasiswa->kelas,
            "judul" => isset($mahasiswa->skripsi->judul) ? $mahasiswa->skripsi->judul : "",
        ];
        return response($data, 200);
    }
}
