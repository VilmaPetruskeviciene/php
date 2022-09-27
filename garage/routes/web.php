<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicsController as M;
use App\Http\Controllers\TrucksController as T;
use App\Http\Controllers\BreakdownController as B;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('mechanic')->name('m_')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index');
    Route::get('/create', [M::class, 'create'])->name('create');
    Route::post('/create', [M::class, 'store'])->name('store');
    Route::get('/show/{mechanics}', [M::class, 'show'])->name('show');
    Route::delete('/delete/{mechanics}', [M::class, 'destroy'])->name('delete');
    Route::get('/edit/{mechanics}', [M::class, 'edit'])->name('edit');
    Route::put('/edit/{mechanics}', [M::class, 'update'])->name('update');
});

Route::prefix('truck')->name('t_')->group(function () {
    Route::get('/', [T::class, 'index'])->name('index');
    Route::get('/create', [T::class, 'create'])->name('create');
    Route::post('/create', [T::class, 'store'])->name('store');
    Route::get('/show/{trucks}', [T::class, 'show'])->name('show');
    Route::delete('/delete/{trucks}', [T::class, 'destroy'])->name('delete');
    Route::get('/edit/{trucks}', [T::class, 'edit'])->name('edit');
    Route::put('/edit/{trucks}', [T::class, 'update'])->name('update');
});

Route::prefix('breakdown')->name('b_')->group(function () {
    Route::get('/', [B::class, 'index'])->name('index');
    Route::get('/trucks-list/{mechanic_id}', [B::class, 'trucksList']);
    Route::post('/create', [B::class, 'store']);
    Route::get('/list', [B::class, 'list']);
    Route::delete('/{breakdown}', [B::class, 'destroy']);
    Route::get('/modal/{breakdown}', [B::class, 'modal']);
    Route::put('/edit/{breakdown}', [B::class, 'update']);
});