<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Logbook;
use App\Models\Notifikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class FormLogbookController extends Controller
{
    function viewFormLogbook(Request $request)
     {
        // ambil data mahasiswa dari db
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
       return view('user.formlogbook')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }

    function createFormLogbook(Request $request)
    {
        // store uploaded file into storage
        $path = $request->file('dokumentasi')->store('/dokumentasi');
        // create reccord on table pengajuan sidang
        $nip = Mahasiswa::find(Auth::user()->username)->nip_dospem;
        // mark
        $logbook = Logbook::create([
            'nim'=>Auth::user()->username,
            'media' => $request->media,
            'dokumentasi' => $path,
            'rincian_kegiatan' => $request->rincian_kegiatan,
            'rencana_pencapaian' => $request->rincian_kegiatan,
            'status' => "-",
        ]);
        
        Session::flash('message', 'logbook berhasil terkirim');
        return redirect(route('user.form-logbook'));
    }
}
