<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SiswaController;


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


// Route::prefix('admin')->group(function () {
//     Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa.index');
//     Route::get('/siswa/create', [SiswaController::class, 'create'])->name('admin.siswa.create');
//     Route::post('/siswa', [SiswaController::class, 'store'])->name('admin.siswa.store');
//     Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('admin.siswa.show');
//     Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('admin.siswa.edit');
//     Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('admin.siswa.update');
//     Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('admin.siswa.destroy');
// });