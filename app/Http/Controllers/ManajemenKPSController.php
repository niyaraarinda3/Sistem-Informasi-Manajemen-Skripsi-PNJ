<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManajemenKPSController extends Controller
{
    function viewManajemenKPS(Request $request)
    {
        // // ambil data mahasiswa bimbingan dari table skripsi
        // $daftarKPS = UserRole::where('role_id', 3)->get();

        // // dd($pengajuan_judul);
        // // mengembalikan view dengan data
        // dd($daftarKPS);
        // return view('admin.manajemenKPS')->with('daftarKPS', $daftarKPS);

        $daftarKPS = UserRole::where('role_id', 3)->get();;
        // mengembalikan view dengan data
        // dd($daftarDosen);
      
        return view('admin.manajemenKPS',['daftarKPS'=> $daftarKPS]);
    }
}
