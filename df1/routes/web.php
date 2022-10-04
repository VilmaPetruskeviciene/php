<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as C;
use App\Http\Controllers\MovieController as M;

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

Route::prefix('category')->name('c_')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index');
    Route::get('/create', [C::class, 'create'])->name('create');
    Route::post('/create', [C::class, 'store'])->name('store');
    Route::get('/show/{category}', [C::class, 'show'])->name('show');
    Route::delete('/delete/{category}', [C::class, 'destroy'])->name('delete');
    Route::get('/edit/{category}', [C::class, 'edit'])->name('edit');
    Route::put('/edit/{category}', [C::class, 'update'])->name('update');
    Route::delete('/delete-movies/{category}', [C::class, 'destroyAll'])->name('delete_movies');
});

Route::prefix('movie')->name('m_')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index');
    Route::get('/create', [M::class, 'create'])->name('create');
    Route::post('/create', [M::class, 'store'])->name('store');
    Route::get('/show/{movie}', [M::class, 'show'])->name('show');
    Route::delete('/delete/{movie}', [M::class, 'destroy'])->name('delete');
    Route::get('/edit/{movie}', [M::class, 'edit'])->name('edit');
    Route::put('/edit/{movie}', [M::class, 'update'])->name('update');
});