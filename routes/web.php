<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;

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
Route::get('/aduan', [DashboardController::class, 'aduan'])->name('aduan.index');
