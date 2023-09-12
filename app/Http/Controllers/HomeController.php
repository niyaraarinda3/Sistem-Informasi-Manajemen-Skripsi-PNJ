<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function viewHome(Request $request)
    {
        $daftarKonten = Konten::get();
        
        return view('user.home',['daftarKonten'=> $daftarKonten]);
    }
}
