<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Halaman admin
Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Berita
    Route::get('/berita/create', [AdminController::class, 'create'])->name('berita.create');
    Route::get('/check-slug', [AdminController::class, 'checkSlug'])->name('checkSlug');
    Route::post('/berita', [AdminController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}', [AdminController::class, 'show'])->name('berita.show');
    Route::get('/berita/{id}/edit', [AdminController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [AdminController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [AdminController::class, 'destroy'])->name('berita.destroy');

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
