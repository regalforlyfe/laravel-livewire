<?php

use App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProyekCreate;
use App\Http\Livewire\ProyekUpdate;
use App\Http\Livewire\Proyek;
use App\Http\Livewire\Profil;
use App\Http\Livewire\Kategori;
use App\Http\Livewire\PilihAnggota;
use App\http\Livewire\RegisterMahasiswa;
use App\http\Livewire\RegisterDosen;

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

Route::group(['middleware' => ['auth','verified']],function(){ 
    Route::get('/proyekcreate', ProyekCreate::class);
    Route::get('/proyekupdate', ProyekUpdate::class);
    Route::get('/proyek', Proyek::class);
    Route::get('/profil', Profil::class);
    Route::get('/admin', Admin::class); 
    Route::get('/pilihanggota/{id}', PilihAnggota::class);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', Kategori::class);
Route::get('/registermahasiswa', RegisterMahasiswa::class);
Route::get('/registerdosen', RegisterDosen::class);