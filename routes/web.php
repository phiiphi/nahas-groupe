<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\GalaryController;


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

Route::get('/',[PagesController::class,'home'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about')->middleware('guest');
Route::get('/services', [PagesController::class, 'services'])->name('services')->middleware('guest');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact')->middleware('guest');
Route::get('/track', [PagesController::class, 'tracking'])->name('tracking')->middleware('guest');
Route::get('/location', [PagesController::class, 'location'])->name('location')->middleware('guest');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery')->middleware('guest');



Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'edit'])->name('user.create')->middleware(['auth']);;
Route::put('/users/update/{user}',[UserController::class,'update'])->name('user.update')->middleware(['auth']);


Route::post('/tracking/search',[TrackController::class,'search'])->name('track.search');

Route::get('/product', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show')->middleware('guest');;

// Route::post('/gallery', [GalaryController::class, 'store'])->name('gallery')->middleware('guest');
