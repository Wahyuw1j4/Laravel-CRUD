<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegistController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [DataController::class, 'index'])->name('home')->middleware('auth');
Route::resource('data', DataController::class);
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'store']); 
Route::post('/logout', [AuthController::class, 'logout']); 
Route::get('/tambah', [DataController::class, 'create'])->middleware('auth');
// Route::get('/edit', function () {
//     return view('edit');
// });
Route::get('/regist', [RegistController::class, 'index'])->middleware('guest');
Route::Post('/regist', [RegistController::class, 'store']);








// Route::post('/simpan', [DataController::class, 'store'])->name('simpan');

// Route::get('/', [DataController::class, 'index']);
// Route::get('/tambah', DataController::class);