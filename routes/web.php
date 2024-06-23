<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSantriController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi', 'DataSantriController@index');
Route::get('/registrasi', [DataSantriController::class, 'index'])->name('registrasi'); 

Route::get('/tambahsantri', [DataSantriController::class, 'tambahsantri'])->name('tambahsantri'); //manmapilkanform
Route::post('/insertdata', [DataSantriController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [DataSantriController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DataSantriController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DataSantriController::class, 'delete'])->name('delete');

//exportPDF
Route::get('/exportpdf', [DataSantriController::class, 'exportpdf'])->name('exportpdf');

