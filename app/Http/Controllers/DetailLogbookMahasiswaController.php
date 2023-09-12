<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailLogbookMahasiswaController extends Controller
{
    function viewDetailLogbookMahasiswa(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();

        $detailLogbook = Logbook::find($id);
      
        return view('user.detailLogbookMahasiswa')->with('detailLogbook', $detailLogbook)->with('mahasiswa', $mahasiswa);
    }
}
