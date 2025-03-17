<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\berita;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        $beritas = Berita::latest()->paginate(3);
        return view('pages/user/dashboard', compact('pegawai', 'beritas'));
    }

    public function siswa()
    {
        return view('pages/user/siswa');
    }

    public function profilsekolah()
    {
        return view('pages/user/profil');
    }

    public function pegawai()
    {
        $pegawai = Pegawai::all();
        return view('pages/user/pegawai', compact('pegawai'));
    }

    public function foto()
    {
        return view('pages/user/galeri-foto');
    }

    public function video()
    {
        return view('pages/user/galeri-video');
    }

    public function kontak()
    {
        return view('pages/user/kontak');
    }
    
    public function aduan()
    {
        return view('pages/user/pengaduan');
    }

}
