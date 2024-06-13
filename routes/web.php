<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
// Auth
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/call-back', [ProviderController::class, 'callback']);

// SAW
Route::resource('/alternatif', AlternatifController::class);
Route::resource('/kriteria', KriteriaController::class);
Route::resource('/nilai', NilaiController::class);
Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');

// Dashboard
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
