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

//查
Route::get('brands', [BrandsController::class, 'index'])->name('brands.index');
//新增表單
Route::get('brands/create', [BrandsController::class, 'create'])->name('brands.create');
//新知資料
Route::post('brands/store', [BrandsController::class, 'store'])->name('brands.store');
//顯示單筆資料
Route::get('brands/{id}', [BrandsController::class, 'show'])->where('id', '[0-9]+')->name('brands.show');
//修改表單
Route::get('brands/{id}/edit', [BrandsController::class, 'edit'])->where('id', '[0-9]+')->name('brands.edit');
//修改資料
Route::patch('brands/update/{id}', [BrandsController::class, 'update'])->where('id', '[0-9]+')->name('brands.update');
//刪除
Route::delete('brands/delete/{id}', [BrandsController::class, 'destroy'])->where('id', '[0-9]+')->name('brands.destroy');



//查
Route::get('products', [ProductsController::class, 'index'])->name('products.index');
//查詢廠商產品
//Route::post('products/MSI', [ProductsController::class, 'MSI'])->name('products.MSI');
//價格破萬查詢
Route::get('products/senior', [ProductsController::class, 'senior'])->name('products.senior');
//新增表單
Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
//新知資料
Route::post('products/store', [ProductsController::class, 'store'])->name('products.store');
//顯示單筆資料
Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+')->name('products.show');
//修改表單
Route::get('products/{id}/edit', [ProductsController::class, 'edit'])->where('id', '[0-9]+')->name('products.edit');;
//修改資料
Route::patch('products/update/{id}', [ProductsController::class, 'update'])->where('id', '[0-9]+')->name('products.update');
//刪除
Route::delete('products/delete/{id}', [ProductsController::class, 'destroy'])->where('id', '[0-9]+')->name('products.destroy');

Route::post('products/class', [ProductsController::class, 'category']);
