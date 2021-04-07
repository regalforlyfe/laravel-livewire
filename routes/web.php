<?php

use App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Proyek;
use App\Http\Livewire\Profil;
use App\Http\Livewire\Kategori;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/proyek', Proyek::class);
Route::get('/profil', Profil::class);
Route::get('/kategori', Kategori::class);
Route::get('/admin', Admin::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
