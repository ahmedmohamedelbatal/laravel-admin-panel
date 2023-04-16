<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('profile')->group(function () {
  Route::get('/',[ProfileController::class,'index'])->name('profile');
  Route::get('/edit',[ProfileController::class,'edit'])->name('profile.edit');
  Route::put('/update',[ProfileController::class,'update'])->name('profile.update');
})->middleware('auth');

Route::resource('/products', ProductController::class)->except('show')->middleware('auth');

Route::resource('/categories', CategoryController::class)->except('show')->middleware('auth');