<?php

use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\MainPage\MainPageController;
use App\Http\Controllers\admin\MainPageController as AdminMainPageController;
use App\Http\Controllers\MenuPageController;
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
Route::get('/menu', [MenuPageController::class, 'index'])->name('menu');



Route::get('/about', function(){
  return view('AboutPage.about');
})->name('about');

Route::get('/locations', function(){
  return view('LocationPage.location');
})->name('locations');

Route::get('/dashboard', [ProductsController::class, 'productPanel'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/settings/lists', [ProductsController::class, 'dashboardDelete'])->middleware(['auth', 'verified'])->name('dashboard.delete');

Route::middleware(['auth'])->group(function () {
  Route::get('/settings/main', [AdminMainPageController::class, 'index'])->name('admin.main');
  Route::post('/settings/main', [AdminMainPageController::class, 'store'])->name('main.store');
});


Route::middleware(['auth'])->group(function () {
    Route::post('settings/setCoffee', [ProductsController::class, 'setCoffee'])->name('setCoffee');
    Route::post('settings/setSweet', [ProductsController::class, 'setSweet'])->name('setSweet');

    Route::get('settings/deleteCoffee/{id}', [ProductsController::class, 'deleteCoffee'])->name('deleteCoffee');
    Route::get('settings/deleteSweet/{id}', [ProductsController::class, 'deleteSweet'])->name('deleteSweet');
});

require __DIR__.'/auth.php';
