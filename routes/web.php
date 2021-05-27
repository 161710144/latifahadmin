<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
// Route Data User
Route::get('/data-user', [App\Http\Controllers\MasterDataController::class, 'indexUser'])->name('master.user');
// Route Data Barang
Route::get('/data-barang', [App\Http\Controllers\MasterDataController::class, 'indexBarang'])->name('master.barang');
// Route Data Daerah
Route::get('/data-daerah', [App\Http\Controllers\MasterDataController::class, 'indexDaerah'])->name('master.daerah');
// Route Data Promo
Route::get('/data-promo', [App\Http\Controllers\MasterDataController::class, 'indexPromo'])->name('master.promo');
// Route Data Transaksi
Route::get('/transaksi-data', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi.index');
// Route Data laporan
Route::get('/Laporan-data', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan.index');

Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
