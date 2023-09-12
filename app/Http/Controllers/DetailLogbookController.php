<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailLogbookController extends Controller
{
    function viewDetailLogbook(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();

        $detailLogbook = Logbook::find($id);
        // mengembalikan view dengan data
        // dd($Dosen);
      
        return view('dosen.detailLogbook')->with('detailLogbook', $detailLogbook)->with('mahasiswa', $mahasiswa);
    }

    function updateDetailLogbook(Request $request, $id)
    {
        Logbook::find($id)->update([
            "feedback"=>$request->feedback,
            "status"=>$request->status,
        ]);

        Session::flash('message', 'Logbook berhasil diupdate');
        return redirect(route('dosen.daftar-logbook'));
    }
}
