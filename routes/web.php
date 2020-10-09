<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\UserController;
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