<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DaftarLogbookController extends Controller
{
     function viewDaftarLogbook(Request $request)
    {
        $daftarLogbook = Logbook::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;
        // dd($daftarLogbook);
        return view('dosen.daftarLogbook',['daftarLogbook'=> $daftarLogbook]);

    }
}
