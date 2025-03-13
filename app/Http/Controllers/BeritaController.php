<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // tampil di user
    public function index()
    {
        $beritas = Berita::all();
        return view('pages/user/berita', compact('beritas'));
    }
}
