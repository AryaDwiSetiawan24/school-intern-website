<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

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
        // $roleFilter = request()->query('role');

        // $query = Pegawai::query();
        // if ($roleFilter) {
        //     $query->where('role', $roleFilter);
        // }

        // $roles = Pegawai::select('role')->distinct()->pluck('role'); // Ambil daftar role unik
        $pegawais = Pegawai::all();
        return view('pages/admin/pegawai/add-pegawai', compact('pegawais'));
    }
}
