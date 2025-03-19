<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GalleryController;

// Halaman user
Route::get('/', [DashboardController::class, 'index'])->name('userDashboard');
Route::get('/profil', [DashboardController::class, 'profil'])->name('userProfil');

// Halaman berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Halaman siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

// Halaman sejarah
Route::get('/siswa', [DashboardController::class, 'siswa'])->name('siswa.index');

// Halaman pegawai
Route::get('/pegawai', [DashboardController::class, 'pegawai'])->name('pegawai.index');

// Halaman galeri
Route::get('/galeri-foto', [DashboardController::class, 'foto'])->name('foto.index');
Route::get('/galeri-foto/album/{album}', [DashboardController::class, 'showFoto'])->name('foto.show');


// Halaman profil sekolah
Route::get('/profilsekolah', [DashboardController::class, 'profilsekolah'])->name('profilsekolah.index');

// Halaman kontak
Route::get('/kontak', [DashboardController::class, 'kontak'])->name('kontak.index');


// Halamam pengaduan
Route::get('/pengaduan', function () {
    return view('pages.user.pengaduan');
})->name('pengaduan.create');

// Route untuk menyimpan pengaduan dari form user
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
