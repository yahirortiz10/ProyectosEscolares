<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\HomeController;

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






//Route::get('/citas',[CitasController::class, 'index'])->name('citas.index');
//Route::get('/citas/create',[CitasController::class, 'create'])->name('citas.create');
 

Route::resource('citas', 'CitasController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/intendente', [App\Http\Controllers\HomeController::class, 'info'])->name('intendente');

Route::get('/informacion', [App\Http\Controllers\HomeController::class, 'covid'])->name('informacion');

Route::get('/information', [App\Http\Controllers\HomeController::class, 'coviid'])->name('information');

Route::get('/calendario', [App\Http\Controllers\HomeController::class, 'hola'])->name('index');