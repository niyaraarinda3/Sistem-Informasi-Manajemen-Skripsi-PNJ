<?php

namespace App\Http\Controllers;

use App\Models\PengajuanJudul;
use Illuminate\Http\Request;

class DaftarPengajuanJudulController extends Controller
{
    function viewDaftarPengajuanJudul(Request $request)
    {
        $daftarPengajuanJudul = PengajuanJudul::with(["pengajuanDospem"=>function($query){
            return $query->with("dosen");
            }])->get();
        // dd($daftarPengajuanJudul);
        return view('admin.daftarPengajuanJudul',['daftarPengajuanJudul'=> $daftarPengajuanJudul]);
    }
}
