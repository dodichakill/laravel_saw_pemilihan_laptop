<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->group(function () {
    Volt::route('', 'pages.auth.login')
        ->name('login');
    Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
    Route::get('/auth/{provider}/call-back', [ProviderController::class, 'callback']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    // SAW
    Route::resource('/alternatif', AlternatifController::class);
    Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit']);
    Route::resource('/kriteria', KriteriaController::class);
    Route::put('/nilai', [NilaiController::class, 'update'])->name('nilai.update');
    Route::resource('/nilai', NilaiController::class);
    Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');
    Route::get('/hitung2', [HitungController::class, 'index2'])->name('hitung.index2');

    // Dashboard
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
});


require __DIR__ . '/auth.php';
