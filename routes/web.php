<?php

use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\MainPage\MainPageController;
use App\Http\Controllers\admin\MainPageController as AdminMainPageController;
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

Route::middleware(['auth'])->group(function () {
  Route::get('/settings/main', [AdminMainPageController::class, 'index'])->name('admin.main');
  Route::post('/settings/main', [AdminMainPageController::class, 'store'])->name('main.store');
});


Route::middleware(['auth'])->group(function () {
    Route::post('admin/product/setCoffee', [ProductsController::class, 'setCoffee'])->name('setCoffee');
    Route::post('admin/product/setSweet', [ProductsController::class, 'setSweet'])->name('setSweet');

    Route::delete('admin/product/deleteCoffee', [ProductsController::class, 'deleteCoffee'])->name('deleteCoffee');
    Route::delete('admin/product/deleteSweet', [ProductsController::class, 'deleteSweet'])->name('deleteSweet');
});

require __DIR__.'/auth.php';
