<?php

use App\Http\Controllers\admin\products\ProductsController;
use App\Http\Controllers\MainPage\MainPageController;
use App\Http\Controllers\admin\MainPageController as AdminMainPageController;
use App\Http\Controllers\admin\products\CoffeeController;
use App\Http\Controllers\admin\products\SweetController;
use App\Http\Controllers\MenuPageController;
use App\Http\Controllers\MessagerController;
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

Route::post('/messager/render', [MessagerController::class, 'renderMessages'])->name('messager.render');
Route::post('messager/create', [MessagerController::class, 'createMessage'])->name('messager.create');

Route::middleware(['auth'])->group(function () {

    Route::get('/settings/main', [AdminMainPageController::class, 'index'])->name('admin.main');
    Route::post('/settings/main', [AdminMainPageController::class, 'store'])->name('main.store');

    Route::get('settings/deleteCoffee/{id}', [CoffeeController::class, 'deleteCoffee'])->name('deleteCoffee');
    Route::post('settings/setCoffee', [CoffeeController::class, 'setCoffee'])->name('setCoffee');
    
    Route::get('settings/deleteSweet/{id}', [SweetController::class, 'deleteSweet'])->name('deleteSweet');
    Route::post('settings/setSweet', [SweetController::class, 'setSweet'])->name('setSweet');
});

require __DIR__.'/auth.php';
