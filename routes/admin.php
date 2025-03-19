<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengaduanController;


//  Halaman admin
Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  // Page admin
  Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

  Route::get('/pegawai', [AdminController::class, 'pegawaiPage'])->name('pegawai.page');
  Route::get('/pegawai/add', [AdminController::class, 'pegawaiAdd'])->name('pegawai.add');

  Route::get('/siswa', [AdminController::class, 'siswaPage'])->name('siswa.page');
  Route::get('/siswa/add', [AdminController::class, 'siswaAdd'])->name('siswa.add');

  Route::get('/berita', [AdminController::class, 'beritaPage'])->name('berita.page');
  Route::get('/berita/add', [AdminController::class, 'beritaAdd'])->name('berita.add');

  Route::get('/pengaduan', [AdminController::class, 'pengaduanPage'])->name('pengaduan.page');

  // CRUD
  // Pegawai
  Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
  Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
  Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
  Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

  // Siswa
  Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
  Route::get('/check-slug', [SiswaController::class, 'checkSlug'])->name('checkSlug');
  Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.detail');
  Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
  Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
  Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

  // Berita
  Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
  Route::get('/check-slug', [BeritaController::class, 'checkSlug'])->name('checkSlug');
  Route::get('/berita/{id}', [BeritaController::class, 'showDetail'])->name('berita.detail');
  Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
  Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
  Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

  // Galeri
  Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri.index');
  Route::get('/galeri/tambah-album', [GalleryController::class, 'create'])->name('galeri.create');
  Route::post('/galeri', [GalleryController::class, 'store'])->name('galeri.store');
  Route::get('/galeri/album/{album}/edit', [GalleryController::class, 'edit'])->name('galeri.editAlbum');
  Route::get('/galeri/album/{album}', [GalleryController::class, 'showAlbum'])->name('galeri.showAlbum');
  Route::put('/galeri/{album}', [GalleryController::class, 'update'])->name('galeri.update');
  Route::delete('/galeri/{album}', [GalleryController::class, 'destroy'])->name('galeri.destroy');

  Route::post('/galeri/{album}/upload', [GalleryController::class, 'uploadPhoto'])->name('galeri.upload');
  Route::get('/galeri/photo/{photo}/edit', [GalleryController::class, 'editPhoto'])->name('galeri.editPhoto');
  Route::put('/galeri/photo/{photo}', [GalleryController::class, 'updatePhoto'])->name('galeri.updatePhoto');
  Route::delete('/galeri/photo/{photo}', [GalleryController::class, 'deletePhoto'])->name('galeri.deletePhoto');

  // Pengaduan
  Route::delete('/admin/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');

  // route settings
  Route::get('/settings/account', function () {
    return view('pages/settings/account');
  })->name('account');
});
