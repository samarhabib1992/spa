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
    return view('providers.dashboard');
});

use App\Http\Controllers\ProviderController;
Route::get('/provider/dashboard', [ProviderController::class, 'dashboard']);


use App\Http\Controllers\ProductController;
Route::get('/provider/productsList', [ProductController::class, 'index'])->name('products.index');
Route::delete('/provider/productsList/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/provider/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/provider/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/provider/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/provider/products/{product}', [ProductController::class, 'update'])->name('products.update');


use App\Http\Controllers\ServiceController;

Route::get('/provider/servicesList', [ProductController::class, 'index'])->name('services.index');
Route::delete('/provider/servicesList/{service}', [ProductController::class, 'destroy'])->name('services.destroy');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');


