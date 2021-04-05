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

//Route::get('/', 'DashboardController@index');

Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Auth::routes();

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::get('products/{id}/gallery','App\Http\Controllers\ProductController@gallery')
    ->name('products.gallery');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('product-galleries', 'App\Http\Controllers\ProductGalleryController');

Route::get('transactions/{id}/set-status','App\Http\Controllers\TransactionController@setStatus')
    ->name('transaction.status');
Route::resource('transactions', 'App\Http\Controllers\TransactionController');

//Route::get('/', 'App\Http\Controllers\DashboardController@index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
