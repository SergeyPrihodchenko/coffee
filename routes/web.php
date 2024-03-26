<?php

use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\MainPage\MainPageController;
  use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainPageController::class, 'index'])->name('main');
Route::get('/about', function(){
  return view('AboutPage.about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardDelete', [ProductsController::class, 'dashboardDelete'])->middleware(['auth', 'verified'])->name('dashboard.delete');

Route::middleware(['auth'])->group(function () {
    Route::post('admin/product/setCoffee', [ProductsController::class, 'setCoffee'])->name('setCoffee');
    Route::post('admin/product/setSweet', [ProductsController::class, 'setSweet'])->name('setSweet');

    Route::get('admin/product/deleteCoffee/{id}', [ProductsController::class, 'deleteCoffee'])->name('deleteCoffee');
    Route::get('admin/product/deleteSweet/{id}', [ProductsController::class, 'deleteSweet'])->name('deleteSweet');
});

require __DIR__.'/auth.php';
