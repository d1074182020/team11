<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
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


Route::get('brands', [BrandsController::class, 'index']);

Route::get('brands/{id}', [BrandsController::class, 'show'])->where('id', '[0-9]+');

Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+');

Route::get('brands/create', [BrandsController::class, 'create']);



Route::get('products', [ProductsController::class, 'index']);

Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

Route::get('products/{id}/edit', [ProductsController::class, 'edit'])->where('id', '[0-9]+');

Route::get('products/create', [ProductsController::class, 'create']);
