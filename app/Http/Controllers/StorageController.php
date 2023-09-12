<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    function getFile($folder, $filename){
        $path = storage_path('app' . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $filename);
        return response()->file($path);
    }
}
