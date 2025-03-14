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
        $beritas = Berita::latest()->paginate(6); // Ambil data berita terbaru, pagination 5 per halaman
        return view('pages/user/berita', compact('beritas'));
    }
    
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('pages/user/show-berita', compact('berita'));
    }
}
