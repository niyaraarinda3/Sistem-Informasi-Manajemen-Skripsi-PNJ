<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManajemenDosenController extends Controller
{
    function viewManajemenDosen(Request $request)
    {
        // ambil data mahasiswa bimbingan dari table dosen
        $daftarDosen = UserRole::where("role_id",2)->get();
        // mengembalikan view dengan data
        // dd($daftarDosen);
        $mahasiswa = new Mahasiswa();
        return view('admin.manajemenDosen',['daftarDosen'=> $daftarDosen,"mahasiswa"=>$mahasiswa]);
    }
}
