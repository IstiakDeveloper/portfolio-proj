<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesPagesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [PagesController::class, 'admin'])->name('admin.dashboard');
Route::get('/admin/main', [MainPageController::class, 'index'])->name('admin.main');
Route::PUT('/admin/main', [MainPageController::class, 'update'])->name('admin.main.update');
Route::get('/admin/services/create', [ServicesPagesController::class, 'create'])->name('admin.services.create');
Route::POST('/admin/services/create', [ServicesPagesController::class, 'store'])->name('admin.services.store');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
