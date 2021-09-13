<?php

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

Route::get('/', [DataController::class, 'index'])->name('home');
Route::resource('data', DataController::class);
Route::get('/login', function () {
    return view('login');
}); 
Route::get('/tambah', [DataController::class, 'create']);
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/regist', [RegistController::class, 'index']);
Route::Post('/regist', [RegistController::class, 'store']);








// Route::post('/simpan', [DataController::class, 'store'])->name('simpan');

// Route::get('/', [DataController::class, 'index']);
// Route::get('/tambah', DataController::class);