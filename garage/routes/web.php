<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicsController as M;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('mechanic')->name('m_')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index');
    Route::get('/create', [M::class, 'create'])->name('create');
    Route::post('/create', [M::class, 'store'])->name('store');
    Route::get('/show/{mechanic}', [M::class, 'show'])->name('show');
    Route::delete('/delete/{mechanic}', [M::class, 'destroy'])->name('delete');
    Route::get('/edit/{mechanic}', [M::class, 'edit'])->name('edit');
    Route::put('/edit/{mechanic}', [M::class, 'update'])->name('update');
});