<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

// Halaman admin
Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Page admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/berita', [AdminController::class, 'beritaPage'])->name('berita.page');
    Route::get('/berita/add', [AdminController::class, 'beritaAdd'])->name('berita.add');
    Route::get('/siswa', [AdminController::class, 'siswaPage'])->name('siswa.page');
    Route::get('/siswa/add', [AdminController::class, 'siswaAdd'])->name('siswa.add');
    Route::get('/pegawai', [AdminController::class, 'pegawaiAdd'])->name('pegawai.create');

    // CRUD
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

    // Pegawai
    Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

    // route sementara
    Route::get('/settings/account', function () {
        return view('pages/settings/account');
    })->name('account');
    Route::get('/settings/notifications', function () {
        return view('pages/settings/notifications');
    })->name('notifications');
    Route::get('/settings/apps', function () {
        return view('pages/settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('pages/settings/plans');
    })->name('plans');
    Route::get('/settings/billing', function () {
        return view('pages/settings/billing');
    })->name('billing');
    Route::get('/settings/feedback', function () {
        return view('pages/settings/feedback');
    })->name('feedback');
});
