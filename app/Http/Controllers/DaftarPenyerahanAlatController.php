<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\PenyerahanAlat;
use Illuminate\Http\Request;

class DaftarPenyerahanAlatController extends Controller
{
    function viewDaftarPenyerahanAlat(Request $request)
    {
        $daftarPenyerahanAlat = PenyerahanAlat::get();
        // dd($daftarPenyerahanAlat);
        return view('admin.daftarPenyerahanAlat',['daftarPenyerahanAlat'=> $daftarPenyerahanAlat]);
    }

    function createDaftarPenyerahanAlat(Request $request)
{  
    // Cari atau buat data PenyerahanAlat berdasarkan nim
    $penyerahanAlat = PenyerahanAlat::updateOrCreate(
         ['nim' => $request->nim],
    );
    

    if ($request->hasFile('f11')) {
        $path = $request->file('f11')->store('/file_f11');
        // Simpan path file di kolom 'file_f11' dalam tabel 'penyerahan_alat'
        $penyerahanAlat->file_f11 = $path;
        $penyerahanAlat->save();
    }
    

    Session::flash('message', 'Penyerahan alat berhasil terkirim');
    return redirect(route('admin.daftar-penyerahan-alat'));
}

}
