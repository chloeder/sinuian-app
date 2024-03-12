<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowSejarahDesa;
use App\Livewire\ShowStruktur;
use App\Livewire\ShowVisiMisi;
use App\Livewire\ShowWilayahDesa;
use App\Livewire\SuratOnline;
use App\Livewire\WajibLapor;
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

Route::get('/', ShowHome::class)->name('home');
Route::get('/struktur-pemerintahan', ShowStruktur::class)->name('struktur.pemerintahan');
Route::get('/visi-misi', ShowVisiMisi::class)->name('visi.misi');
Route::get('/sejarah-desa', ShowSejarahDesa::class)->name('sejarah.desa');
Route::get('/wilayah-desa', ShowWilayahDesa::class)->name('wilayah.desa');
Route::get('/surat-online', SuratOnline::class)->name('surat.online');
Route::get('/wajib-lapor', WajibLapor::class)->name('wajib.lapor');
