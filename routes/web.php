<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\LoginController;
use App\Http\controllers\DatabukuController;
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

Route::get('/', [LoginController::class, 'index']);

Route::post('/', [LoginController::class, 'authenticate']);  


Route::get('/dashboard', function () {
    return view('/perpustakaan/dashboard/dashboard');
});

Route::get('/databuku', [DatabukuController::class,'index']);


Route::get('/datauser', function () {
    return view('/perpustakaan/datauser/datauser');
});
Route::get('/peminjaman', function () {
    return view('/perpustakaan/peminjaman/peminjaman');
});