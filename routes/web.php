<?php

use App\Http\Controllers\BahanbakuController;
use App\Http\Controllers\BahanjadiController;
use App\Http\Controllers\PurchaseorderController;
use App\Http\Controllers\SupplierController;
use App\Models\Bahanbaku;
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
    return redirect('/login');
});

Auth::routes([
    'register' => false,
]);

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//supplier
Route::resource('/supplier',SupplierController::class); 
// purchase order
Route::get('/purchase-order/request',[PurchaseorderController::class,'purchaseorder']);
Route::resource('/purchase-order',PurchaseorderController::class);
// bahan baku
Route::patch('/bahanbaku/keluarbarang/{id}',[BahanbakuController::class,'update'])->name('update'); 
Route::get('/bahanbaku/{id}/keluarbarang',[BahanbakuController::class,'keluarbarang']);
Route::get('/bahanbaku/keluar',[BahanbakuController::class,'keluar']);
Route::get('/bahanbaku/masuk',[BahanbakuController::class,'masuk']);
Route::get('/bahanbaku/stok',[BahanbakuController::class,'stokbahan']);
Route::patch('/bahanbaku/keluar',[BahanbakuController::class,'storekeluar']);
Route::resource('/bahanbaku',BahanbakuController::class);

// bahan jadi
Route::patch('/bahanjadi/keluarbarang/{id}',[BahanjadiController::class,'update'])->name('update'); 
Route::get('/bahanjadi/{id}/keluarbarang',[BahanjadiController::class,'keluarbarang']);
Route::get('/bahanjadi/keluar',[BahanjadiController::class,'keluar']);
Route::get('/bahanjadi/masuk',[BahanjadiController::class,'masuk']);
Route::get('/bahanjadi/stok',[BahanjadiController::class,'stokbahan']);
Route::patch('/bahanjadi/keluar',[BahanjadiController::class,'storekeluar']);
Route::resource('/bahanjadi',BahanjadiController::class);

// laporan penjualan hijab
Route::get('/laporan/penjualan-hijab',[BahanjadiController::class,'penjualanhijab']);