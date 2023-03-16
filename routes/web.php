<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresenceController;

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
Route::get('/', [PresenceController::class, 'index'])->name('home');
Route::get('/tambah-data',[PresenceController::class, 'create']);
Route::post('/kirim-data',[PresenceController::class, 'store'])->name('kirim_data');
//{id} -path dinamis 
//path yang isinya ga tetap atau path yang datanya dikirim dari database 
Route::get('/edit/{id}', [PresenceController::class, 'edit'])->name('edit');
Route::patch('/ubah/{id}', [PresenceController::class, 'update'])->name('ubah');
Route::delete('/hapus/{id}', [PresenceController::class, 'destroy'])->name('hapus');