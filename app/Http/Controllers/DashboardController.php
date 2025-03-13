<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
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

    public function profil()
    {
        return view('pages/user/profil');
    }
}
