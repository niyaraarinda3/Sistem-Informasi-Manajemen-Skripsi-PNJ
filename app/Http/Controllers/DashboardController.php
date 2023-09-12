<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function viewDashboard(Request $request)
    {
        if($request->isMethod('post')){
            $prodi = $request->prodi;
            $tahun = $request->tahun_ajaran;

            $mahasiswa = new Mahasiswa();
            if($prodi != null && $prodi != ""){
                $mahasiswa = $mahasiswa->where('prodi', $prodi);
            }

            if($tahun != null && $tahun != ""){
                $mahasiswa = $mahasiswa->where('tahun_ajaran', $tahun);
            }
            $dataMahasiswa = $mahasiswa->get();
            // dd($request->request->all());
        }else{
            $dataMahasiswa = Mahasiswa::get();
        }
        $tahun_ajaran = Mahasiswa::select('tahun_ajaran')->distinct()->get();
        $prodi = Mahasiswa::select('prodi')->distinct()->get();

        return view('admin.dashboardAdmin', ["dataMahasiswa" => $dataMahasiswa, "tahun_ajaran" => $tahun_ajaran, "prodi" => $prodi]);
    }


    function viewDashboardFilter(Request $request)
    {
        dd($request);
        // if($request->status == 'pengajuanJudul'){
        //     $dataMahasiswa = Mahasiswa::where('status_id', '1')->get();
        // }elseif($request->status == 'pengajuanSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '2')->get();
        // }elseif($request->status == 'lulusSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '3')->get();
        // }elseif($request->status == 'tidakLulusSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '4')->get();
        // }elseif($request->status == 'pengajuanSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '5')->get();
        // }elseif($request->status == 'lulusSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '6')->get();
        // }elseif($request->status == 'tidakLulusSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '7')->get();
        // }else {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '8')->get();
        // }


        // return view('admin.dashboardAdmin')->with('dataMahasiswa', $dataMahasiswa);

        $dataMahasiswa = [];
        $statusId = null;
        if ($request->status == 'pengajuanJudul') {
            $dataMahasiswa = Mahasiswa::where('status_id', '1')->get();
            $statusId = 1;
        } elseif ($request->status == 'pengajuanSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '2')->get();
            $statusId = 2;
        } elseif ($request->status == 'lulusSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '3')->get();
            $statusId = 3;
        } elseif ($request->status == 'tidakLulusSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '4')->get();
            $statusId = 4;
        } elseif ($request->status == 'pengajuanSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '5')->get();
            $statusId = 5;
        } elseif ($request->status == 'lulusSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '6')->get();
            $statusId = 6;
        } elseif ($request->status == 'tidakLulusSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '7')->get();
            $statusId = 7;
        } elseif ($request->status == 'sedangRevisi') {
            $dataMahasiswa = Mahasiswa::where('status_id', '8')->get();
            $statusId = 8;
        } else {
            $statusId = 9;
            $dataMahasiswa = Mahasiswa::where('status_id', '9')->get();
        }

        // filter prodi
        // kalo prodinya di select dan statusnya juga di select
        if ($request->prodi && $statusId) {
            $dataMahasiswa = Mahasiswa::where('status_id', $statusId)->Where('prodi', 'like', '%' . $request->prodi . '%')->get();
        } else if ($request->prodi) {
            // kalo prodinya doang yg di select
            // ambil data mahasiswa like prodi
            $dataMahasiswa = Mahasiswa::Where('prodi', 'like', '%' . $request->prodi . '%')->get();
        } else if ($request->prodi == null && $request->status == null) {
            // kalo select prodinya kosong sama statusnya kosong
            // ambil semua datanya dek
            $dataMahasiswa = Mahasiswa::all();
        }

        return view('admin.dashboardAdmin')->with(['dataMahasiswa' => $dataMahasiswa, 'request' => $request]);
    }
}
