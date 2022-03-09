<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Auth::routes();

Route::get('/ficha-datatables', [App\Http\Controllers\FichaDatatableController::class, 'index'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\LiquidacionController::class, 'download'])->name('pdf');
Route::get('/numeroLetras', [App\Http\Controllers\NumeroLetrasController::class, 'index']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
Route::view('fichas', 'livewire.fichas.index')->middleware('auth');
Route::view('tecnicos', 'livewire.tecnicos.index')->middleware('auth');
Route::view('sillas', 'livewire.sillas.index')->middleware('auth');
Route::view('finiquitos', 'livewire.finiquitos.index')->middleware('auth');

Auth::routes([
    'register' => true
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


