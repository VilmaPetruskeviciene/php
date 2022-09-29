<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as C;

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
    Route::get('/show/{mechanics}', [C::class, 'show'])->name('show');
    Route::delete('/delete/{mechanics}', [C::class, 'destroy'])->name('delete');
    Route::get('/edit/{mechanics}', [C::class, 'edit'])->name('edit');
    Route::put('/edit/{mechanics}', [C::class, 'update'])->name('update');
});