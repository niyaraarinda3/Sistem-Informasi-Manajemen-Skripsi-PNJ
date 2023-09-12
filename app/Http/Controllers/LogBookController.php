<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Logbook;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Auth;

class LogBookController extends Controller
{
    //
    function viewLogBookMahasiswa(Request $request)
    {
       $logbook = Logbook::where("nim",Auth::user()->username)->get();

        $dospem = null;
        $skripsi = Skripsi::where('nim', $request->user()->username)->first();
        if ($skripsi != null) {
            $dospem = Dosen::where('nip', $skripsi->nip_dospem)->first();
        }
        
        return view('user.logbook', ['dospem' => $dospem,'logbook' => $logbook]);

    }
}
