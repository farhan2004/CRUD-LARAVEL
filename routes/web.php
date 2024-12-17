<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/beranda', [HomeController::class, 'index'])->middleware('isLogin');
Route::get('/tentang', [HomeController::class, 'tentang'])->middleware('isLogin');
Route::get('/kontak', [HomeController::class, 'kontak'])->middleware('isLogin');
Route::get('/siswa', [SiswaController::class, 'index'])->middleware('isLogin');
Route::match(['get', 'post'], '/siswa/insert', [SiswaController::class, 'insert'])->middleware('isLogin');
Route::match(['get', 'post'], '/siswa/ubah/{id}', [SiswaController::class, 'ubah'])->middleware('isLogin');
Route::match(['get', 'post'], '/siswa/hapus/{id}', [SiswaController::class, 'hapus'])->middleware('isLogin');
Route::get('/admin', function(){
    return view('tema');
});

Route::get('/', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->middleware('isLogin');
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');
