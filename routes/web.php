<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('home');
 });
//Route::resource('gallery', GalleryController::class);

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');


Route::resource('guru', GuruController::class);
Route::get('cetak_guru', [GuruController::class, 'cetak_guru'])->name('cetak_guru');

//other way route
Route::resource('pelajaran', PelajaranController::class);

Route::resource('kurikulum', KurikulumController::class);

Route::resource('jadwal', JadwalController::class);

Route::resource('perkiraan', PerkiraanController::class);
Route::get('cetak_perkiraan', [PerkiraanController::class, 'cetak_perkiraan'])->name('cetak_perkiraan');



Route::resource('hari', HariController::class);
Route::resource('siswa', SiswaController::class);
Route::get('cetak_siswa', [SiswaController::class, 'cetak_siswa'])->name('cetak_siswa');

Route::resource('pengumuman', PengumumanController::class);
Route::get('cetak_pengumuman', [PengumumanController::class, 'cetak_pengumuman'])->name('cetak_pengumuman');

//Route::get('/', [LoginController::class, 'login'])->name('login');
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
