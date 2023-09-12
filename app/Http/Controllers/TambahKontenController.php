<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TambahKontenController extends Controller
{
    function viewTambahKonten()
    {
        return view('admin.tambahKonten');
    }

    function createTambahKonten(Request $request)
    {
        // store uploaded file into storage
        $path = $request->file('file_konten')->store('/file_konten');
        // create reccord on table konten
        $konten = Konten::create([
            'judul' => $request->judul,
            'deskripsi' => isset($request->deskripsi) ? $request->deskripsi : null,
            'file_konten' => $path,
        ]);
        
        Session::flash('message', 'konten berhasil terkirim');
        return redirect(route('admin.tambah-konten'));
    }
}
