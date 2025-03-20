<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\Pengaduan;
use App\Models\Siswa;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        $lakiLaki = Siswa::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = Siswa::where('jenis_kelamin', 'Perempuan')->count();
        $totalSiswa = Siswa::count(); // Total semua siswa
        // Jumlah siswa kelas 1 - 6
        $kelas1 = Siswa::where('kelas', '=', '1')->count();
        $kelas2 = Siswa::where('kelas', '=', '2')->count();
        $kelas3 = Siswa::where('kelas', '=', '3')->count();
        $kelas4 = Siswa::where('kelas', '=', '4')->count();
        $kelas5 = Siswa::where('kelas', '=', '5')->count();
        $kelas6 = Siswa::where('kelas', '=', '6')->count();

        $beritasTerbaru = Berita::latest()->take(3)->get();
        $beritasTerlama = Berita::orderBy('updated_at', 'asc')->take(2)->get();
        $pegawais = Pegawai::latest()->take(5)->get();
        $pengaduan = Pengaduan::latest()->take(5)->get();

        return view('pages/admin/dashboard', compact('lakiLaki', 'perempuan', 'totalSiswa', 'kelas1', 'kelas2', 'kelas3', 'kelas4', 'kelas5', 'kelas6','beritasTerlama', 'beritasTerbaru', 'pegawais', 'pengaduan'));
    }

    // Pegawai
    public function pegawaiAdd(Request $request)
    {
        $pegawais = Pegawai::all();
        return view('pages/admin/pegawai/add-pegawai', compact('pegawais'));
    }

    public function pegawaiPage()
    {
        $pegawais = Pegawai::all();
        return view('pages/admin/pegawai/show-all-pegawai', compact('pegawais'));
    }

    // Siswa
    public function siswaPage()
    {
        $siswas = Siswa::all();
        return view('pages/admin/siswa/show-all-siswa', compact('siswas'));
    }

    public function siswaAdd()
    {
        $siswa = Siswa::all();
        return view('pages/admin/siswa/add-siswa', compact('siswa'));
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

    // Pengaduan
    public function pengaduanPage()
    {
        $pengaduan = Pengaduan::latest()->get();
        return view('pages/admin/pengaduan/show-pengaduan', compact('pengaduan'));
    }
}
