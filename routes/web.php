<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('profile',[ProfileController::class,'index'])->name('profile');

Route::get('profile/edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('profile/edit',[ProfileController::class,'update'])->name('profile.update');

Route::resource('products', ProductController::class)->except('show');