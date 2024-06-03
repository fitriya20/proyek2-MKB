<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class, 'index'])->name('home');
Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::get('/home/shop', [ProdukController::class, 'index'])->name('produk');
