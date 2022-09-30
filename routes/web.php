<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPage;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PegawaiController;
session_start();
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
// hal
// Halaman Products
route::prefix('index')->group(function(){
    route::get('/', [IndexPage::class, 'index']);
});

route::get('/barang', [BarangController::class, 'barang']);

route::get('/pelanggan', [PelangganController::class, 'pelanggan']);

route::get('/pegawai', [PegawaiController::class, 'pegawai']);

route::get('/supplier', [SupplierController::class, 'supplier']);