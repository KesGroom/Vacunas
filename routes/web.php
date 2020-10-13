<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GraficaController;

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
    return view('welcome');
});
//mostrar las vacunas
Route::get('vaccines/index',[VaccineController::class, 'index'])->name('vaccines.index');
//mostrar los usuarios
Route::get('Users/index',[UserController::class, 'index'])->name('users.index');
//Formulario de users
Route::get('Users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
//Formulario de users
Route::get('Users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
//actualizacion de users
Route::put('Users/{user}',[UserController::class,'update'])->name('users.update');

Route::get('Users/create',function(){
    return view('Users/create');
});

// Route::get('report/report',[GraficaController::class, 'forAge']);

// Route::post('report/report', [])->name('report.forAge');
// Route::get('report/report',function(){
//     return view('report/report');
// });

// Route::get('report/report', [GraficaController::class, 'forAge'])->name('report.report');

Route::view('report/reporte', 'report/reporte')->name('report.report');

Route::view('report/graficos', 'report/graficos');
