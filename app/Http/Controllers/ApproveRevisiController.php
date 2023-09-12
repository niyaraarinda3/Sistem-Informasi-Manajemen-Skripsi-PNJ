<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\revisi;
use App\Models\Skripsi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApproveRevisiController extends Controller
{

public function viewApproveRevisi(Request $request, $id)
{
    $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();
    
    $detailRevisiSkripsi = Revisi::find($id);

    $skripsi = Skripsi::where('nim',  $detailRevisiSkripsi->nim)->first();

    if($detailRevisiSkripsi->status!='menunggu persetujuan'){
        return redirect()->back();
    }
    
    return view('penguji.approveRevisi')->with('detailRevisiSkripsi', $detailRevisiSkripsi)->with('mahasiswa', $mahasiswa);
}
function updateApproveRevisi(Request $request, $id)
    {
        Revisi::find($id)->update([
            "feedback"=>$request->feedback,
            "status"=>$request->status,
        ]);

        Session::flash('message', 'Persetujuan revisi berhasil diupdate');
        return redirect(route('penguji.daftar-revisi'));
    }
}