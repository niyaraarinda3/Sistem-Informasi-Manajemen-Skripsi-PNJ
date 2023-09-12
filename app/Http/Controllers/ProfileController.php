<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanDospem;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use App\Models\Skripsi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
  function viewProfile(Request $request)
     {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('user.profile')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }
    
     function createProfile(Request $request)
    {
       $request->validate([
            'judul' => 'required',
            'skripsi' => 'required',
        ]);
        $nip = Mahasiswa::find(Auth::user()->username)->nip_dospem;
        // $name = time() . "_" . $request->skripsi->getClientOriginalName();
        $path = $request->file('skripsi')->store('/skripsi');
        // Storage::disk('skripsi')->put($name, file_get_contents($request->skripsi));
        Skripsi::updateOrCreate([
            "nim"=>Auth::user()->username,
            "nip_dospem"=>$nip,
        ],[
            "nim"=>Auth::user()->username,
            "nip_dospem"=>$nip,
            "judul"=>$request->judul,
            "file_skripsi"=>$path,
        ]);

        Session::flash('message', 'Upload file berhasil');
        return redirect(route('user.profile'));
    } 
}
