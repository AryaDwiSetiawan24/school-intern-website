<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Halaman admin
Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/analytics', [AdminController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [AdminController::class, 'fintech'])->name('fintech');

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
