<?php

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

use Modules\Products\Http\Controllers\ProductsController;

Route::prefix('products')->group(function() {
    Route::get('/', 'ProductsController@index')->name('products');
    Route::get('/create', [ProductsController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductsController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::POST('/update/{id}', [ProductsController::class, 'update'])->name('product.update');
    Route::get('/destroy/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
});
