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

Route::get('/', [App\Http\Controllers\UrlController::class, 'create'])->name('url_shoren.create');
Route::post('/url_shorten', [App\Http\Controllers\UrlController::class, 'store'])->name('url_shoren.store');
Route::get('/{shorten_str}', [App\Http\Controllers\UrlController::class, 'index'])->name('shorten_str.index');
