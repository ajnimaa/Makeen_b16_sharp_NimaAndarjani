<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    // product get routes
    Route::get('add', [ProductController::class, 'create'])->name('showcreate');
    Route::get('edit/{id}', [ProductController::class, 'update'])->name('update');
    Route::get('index', [ProductController::class, 'index'])->name('index');
    //product post routes
    Route::post('add', [ProductController::class, 'add'])->name('add');
    Route::post('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    // product delete route
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    //users get routes
    Route::get('add', [UserController::class, 'create'])->name('showcreate');
    Route::get('edit/{id}', [UserController::class, 'update'])->name('update');
    Route::get('index', [UserController::class, 'index'])->name('index');
    //users post routes
    Route::post('add', [UserController::class, 'add'])->name('add');
    Route::post('edit/{id}', [UserController::class, 'edit'])->name('edit');
    //users delete route
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
});


Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
    //orders get routes
    Route::get('add', [OrderController::class, 'create'])->name('showcreate');
    Route::get('edit/{id}', [OrderController::class, 'update'])->name('update');
    Route::get('index', [OrderController::class, 'index'])->name('index');
    //orders post routes
    Route::post('add', [OrderController::class, 'add'])->name('add');
    Route::post('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    //orders delete route
    Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
});

Route::group(['perfix' => 'posts', 'as' => 'posts.'], function () {
    // post get route
    Route::get('add', [PostController::class, 'create'])->name('showcreate');
    Route::get('edit/{id}', [PostController::class, 'update'])->name('update');
    Route::get('index', [PostController::class, 'index'])->name('index');
    //posts POST route
    Route::post('add', [PostController::class, 'add'])->name('add');
    Route::post('edit/{id}', [PostController::class, 'edit'])->name('edit');
    //posts delete route
    Route::delete('delete/{id}', [PostController::class, 'delete'])->name('delete');
});

