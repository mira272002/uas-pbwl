<?php

use Illuminate\Support\Facades\Auth;
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
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/durians', [App\Http\Controllers\DuriansController::class, 'index'])->name('durians')->middleware('auth');
Route::get('/durians/create', [App\Http\Controllers\DuriansController::class, 'create'])->name('durians')->middleware('auth');
Route::post('/durians/store', [App\Http\Controllers\DuriansController::class, 'store'])->name('durians')->middleware('auth');
Route::get('/durians/edit/{id}', [App\Http\Controllers\DuriansController::class, 'edit'])->name('durians')->middleware('auth');
Route::post('/durians/update/{id}', [App\Http\Controllers\DuriansController::class, 'update'])->name('durians')->middleware('auth');
Route::get('/durians/destroy/{id}', [App\Http\Controllers\DuriansController::class, 'destroy'])->name('durians')->middleware('auth');

Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/customers/create', [App\Http\Controllers\CustomersController::class, 'create'])->name('customers')->middleware('auth');
Route::post('/customers/store', [App\Http\Controllers\CustomersController::class, 'store'])->name('customers')->middleware('auth');
Route::get('/customers/edit/{id}', [App\Http\Controllers\CustomersController::class, 'edit'])->name('customers')->middleware('auth');
Route::post('/customers/update/{id}', [App\Http\Controllers\CustomersController::class, 'update'])->name('customers')->middleware('auth');
Route::get('/customers/destroy/{id}', [App\Http\Controllers\CustomersController::class, 'destroy'])->name('customers')->middleware('auth');
