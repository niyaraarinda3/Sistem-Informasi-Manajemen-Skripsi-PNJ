<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSidang;
use App\Models\PengajuanSidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarPengajuanSidangController extends Controller
{
    function viewDaftarPengajuanSidang(Request $request)
    {
        $daftarPengajuanSidang = PengajuanSidang::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();

            $dosen = Dosen::get();
        
        return view('admin.daftarPengajuanSidang',['daftarPengajuanSidang'=> $daftarPengajuanSidang, 'dosen'=> $dosen]);
    }
function createDaftarPengajuanSidang(Request $request)
{ 
    $pengajuanSidang = PengajuanSidang::updateOrCreate(
        ['nim' => $request->nim],
        [
            'nim' => $request->nim,
            'dosen_penguji1' => $request->dosen1,
            'dosen_penguji2' => $request->dosen2,
            'dosen_penguji3' => $request->dosen3,
            'jadwal_sidang' => $request->jadwal_sidang,
            'ruang' => $request->ruang,
        ]
    );

    HasilSidang::updateOrCreate(
        ['pengajuan_sidang_id' => $pengajuanSidang->id],
        [
            'pengajuan_sidang_id' => $pengajuanSidang->id,
            'keterangan' => $request->keterangan,
            'nilai' => $request->nilai,
            'status' => $request->statusHasil,
        ]
    );

     if($request->status == 'Lulus'){
             Mahasiswa::find($request->nim)->update([
            'status_id' => '6',
        ]);
        }elseif ($request->status == 'Tidak Lulus') {
            Mahasiswa::find($request->nim)->update([
            'status_id' => '7',]);
       }else{
             Mahasiswa::find($request->nim)->update([
            'status_id' => '5',
        ]);
    }
        
        Session::flash('message', 'Pengajuan sidang berhasil terkirim');
        return redirect(route('admin.daftar-pengajuan-sidang'));
    }

}