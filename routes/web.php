<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengaduanController;

// Halaman user
Route::get('/', [DashboardController::class, 'index'])->name('userDashboard');
Route::get('/profil', [DashboardController::class, 'profil'])->name('userProfil');

// Halaman berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Halaman sejarah
Route::get('/sejarah', [DashboardController::class, 'sejarah'])->name('sejarah.index');

// Halaman pegawai
Route::get('/pegawai', [DashboardController::class, 'pegawai'])->name('pegawai.index');

// Halaman galeri
Route::get('/galeri-foto', [DashboardController::class, 'foto'])->name('foto.index');
Route::get('/galeri-video', [DashboardController::class, 'video'])->name('video.index');

// Halaman visi-misi
Route::get('/visi-misi', [DashboardController::class, 'visi'])->name('visi.index');

// Halaman kontak
Route::get('/kontak', [DashboardController::class, 'kontak'])->name('kontak.index');

// Halaman pengaduan
// Menampilkan halaman form pengaduan (GET)
Route::get('/pengaduan', function () {
    return view('pages.user.pengaduan');
})->name('pengaduan.create');

// Route untuk menyimpan pengaduan dari form user
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Route untuk menampilkan dan menghapus pengaduan di dashboard admin
Route::get('/admin/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.show-all-pengaduan');
Route::delete('/admin/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');