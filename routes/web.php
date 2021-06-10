<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'index']);
Route::get('/productdetail', [FrontendController::class, 'productdetail'])->name('productdetail');

// Home
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category
Route::resource('category', CategoryController::class);
Route::get('/categoey/destroyall', [CategoryController::class, 'destroyall'])->name('category.alldestroy');
Route::post('/categoey/selected', [CategoryController::class, 'deleteselected'])->name('category.selected');

// Product
Route::resource('product', ProductController::class);