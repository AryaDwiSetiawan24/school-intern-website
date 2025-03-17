<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\Berita;
use App\Models\Pegawai;

class AdminController extends Controller
{
    public function index()
    {
        $beritasTerbaru = Berita::latest()->take(3)->get();
        $beritasTerlama = Berita::orderBy('updated_at', 'asc')->take(2)->get();
        $pegawais = Pegawai::latest()->take(5)->get();
        return view('pages/admin/dashboard', compact('beritasTerlama', 'beritasTerbaru', 'pegawais'));
    }

    // Berita
    public function beritaPage()
    {
        $beritas = Berita::all();
        return view('pages/admin/berita/show-all-berita', compact('beritas'));
    }

    public function beritaAdd()
    {
        $berita = Berita::all();
        return view('pages/admin/berita/add-berita', compact('berita'));
    }

    // Pegawai
    public function pegawaiAdd(Request $request)
    {
        $pegawais = Pegawai::all();
        return view('pages/admin/pegawai/add-pegawai', compact('pegawais'));
    }
}
