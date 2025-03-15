<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Pegawai;


class AdminController extends Controller
{
    public function index()
    {
        return view('pages/admin/dashboard');
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
    public function pegawaiAdd()
    {
        $pegawais = Pegawai::all();
        return view('pages/admin/pegawai/add-pegawai', compact('pegawais'));
    }
}
