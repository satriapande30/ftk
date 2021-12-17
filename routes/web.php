<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [CrudController::class,'index']);
Route::get('/create', [CrudController::class,'create']);
Route::post('/simpan', [CrudController::class, 'store']);
//route untuk edit data
Route::get('/edit/{id}', [CrudController::class, 'edit']);
//route untuk mengupdate data yang sudah diedit
Route::post('/update', [CrudController::class, 'update']);
//route untuk menghapus data
Route::get('/hapus/{id}', [CrudController::class, 'destroy']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


