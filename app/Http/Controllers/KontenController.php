<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    function viewKonten(Request $request)
    {
        $daftarKonten = Konten::get();
        // mengembalikan view dengan data
        // dd($daftarDosen);

        return view('admin.Konten', ['daftarKonten' => $daftarKonten]);
    }

    function deleteKonten(Request $request, $kontenId)
    {
        // cari kontennya by id 
        $konten = Konten::find($kontenId);
        // TODO hapus filenya 

        // delete kontennya
        $konten->delete();
        // kasih alert kalo success
        session()->flash("message", "Berhasil menghapus konten");
        return redirect()->back();
    }
}
