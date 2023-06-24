<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DetailProduk;
// use Auth;
use Illuminate\Support\Facades\Auth;

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




Route::get('/', [FrontendController::class, 'index']);

//routing dirinya sendiri
Route::get('/salam',function(){
    return 'Assalamualaikum';
});
//routing mengarahkan ke view
Route::get('/hallo', function(){
    return view ('hallo');
});

Route::get('/after_register', function(){
    return view ('after_register');
});


Route::get('/hallo2', function(){
    return view ('hallo.halloworld');
});
Route::get('/form', [FormController::class,'index']);
Route::post('/hasil', [FormController::class, 'store']);

Route::get('/pemeriksaan', [PemeriksaanController::class,'index']);
Route::post('/hasil', [FormController::class, 'store']);


Route::get('/forminput', 'ForminputController@showForm');
Route::post('/forminput', 'ForminputController@processForm');


Route::post('/detailproduk', [DetailProdukController::class,'index']);
Route::group(['middleware' => ['auth', 'role:admin-manager']],function(){

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/view/{id}', [ProdukController::class, 'view'])->name('produk.view/{id}');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit/{id}');
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete/{id}');

Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan/store', [PesananController::class, 'store']);
Route::get('/pesanan/delete/{id}', [PesananController::class, 'delete'])->name('pesanan.delete/{id}');

Route::resource('kategori_produk', KategoriProdukController::class);
Route::get('/kategori_produk/delete/{id}', [KategotiProdukController::class, 'delete'])->name('kategori_produk.delete/{id}');
// Route::put('kategori_produk/{kategori_produk}', [KategoriProdukController::class, 'edit']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
