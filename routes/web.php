<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


//Category-Products

Route::get('/category/{slug}/{id}', [CategoryController::class, 'index'])->name('category.product');

Route::get('/search ', [ProductController::class, 'search'])->name('search');

Route::get('/products', [ProductController::class, 'index']);


//Add to cart
Route::get('/products/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
//Show cart
Route::get('/products/show-cart', [ProductController::class, 'showCart'])->name('showCart');
//Update cart
Route::get('/products/update-cart', [ProductController::class, 'updateCart'])->name('updateCart');
//Delete cart
Route::get('/products/delete-cart', [ProductController::class, 'deleteCart'])->name('deleteCart');
//Purchase
Route::post('/products/purchase', [ProductController::class, 'purchase'])->name('purchase');


//Login

Route::get('/login', [UserController::class, 'loginUser'])->name('login');
Route::get('/user_info', [UserController::class, 'UserInfo'])->name('user_info');
Route::post('/login', [UserController::class, 'postLoginUser']);

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegisterUser']);

Route::get('logout', [UserController::class, 'logout'])->name('logout');