<?php

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

Route::get('/', function () { return view('components.beranda.index'); });

Route::get('/beranda', function () { return view('components.beranda.index'); });

Route::get('/jamaah', function () { return view('components.jamaah.index'); });
Route::get('/jamaah/detail', function () { return view('components.jamaah.detail'); });
Route::get('/jamaah/form', function () { return view('components.jamaah.form'); });

Route::get('/agent', function () { return view('components.agent.index'); });
Route::get('/agent/detail', function () { return view('components.agent.detail'); });
Route::get('/agent/form', function () { return view('components.agent.form'); });

Route::get('/karyawan', function () { return view('components.karyawan.index'); });
Route::get('/karyawan/detail', function () { return view('components.karyawan.detail'); });
Route::get('/karyawan/form', function () { return view('components.karyawan.form'); });

Route::get('/pemasukan', function () { return view('components.pemasukan.index'); });
Route::get('/pemasukan/detail', function () { return view('components.pemasukan.detail'); });
Route::get('/pemasukan/form', function () { return view('components.pemasukan.form'); });

Route::get('/pengeluaran', function () { return view('components.pengeluaran.index'); });
Route::get('/pengeluaran/detail', function () { return view('components.pengeluaran.detail'); });
Route::get('/pengeluaran/form', function () { return view('components.pengeluaran.form'); });

Route::get('/users', function () { return view('components.users.index'); });
Route::get('/users/detail', function () { return view('components.users.detail'); });
Route::get('/users/form', function () { return view('components.users.form'); });

Route::get('/hak-akses', function () { return view('components.hak-akses.index'); });
Route::get('/riwayat', function () { return view('components.riwayat.index'); });
Route::get('/backup', function () { return view('components.backup.index'); });

Route::get('/pesan/form', function () { return view('components.pesan.form'); });
Route::get('/pesan', function () { return view('components.pesan.index'); });
Route::get('/pesan/detail', function () { return view('components.pesan.detail'); });

Route::get('/template/form', function () { return view('components.template.form'); });
Route::get('/template', function () { return view('components.template.index'); });
Route::get('/template/detail', function () { return view('components.template.detail'); });

Route::get('/kontak/form', function () { return view('components.kontak.form'); });
Route::get('/kontak', function () { return view('components.kontak.index'); });
Route::get('/kontak/detail', function () { return view('components.kontak.detail'); });

Route::get('/grup/form', function () { return view('components.grup.form'); });
Route::get('/grup/detail', function () { return view('components.grup.detail'); });
