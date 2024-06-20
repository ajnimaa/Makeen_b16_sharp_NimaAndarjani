<?php

use App\Http\Controllers\FactorController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarrentyController;
use App\Jobs\ProductCreateJob;
use App\Models\Massage;
use App\Models\User;
use App\Models\Warrenty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logi', function () {
    return '401';
});
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum')->name('logout');

//users register
Route::post('users/register', [UserController::class, 'register'])->name('users.register');
//
Route::group([
    'prefix' => 'users', 'as' => 'users.',
    //'middleware' => 'auth:sanctum',
    //  'middleware' => 'permission::super_admin'
], function () {
    //users get routes
    Route::get('index/{id?}', [UserController::class, 'index'])->name('index');
    //users post routes
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
    //users delete route
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    //users profile add
    Route::post('storeprofile', [UserController::class, 'storeprofile'])->name('storeprofile');
});

Route::group([
    'prefix' => 'products', 'as' => 'products.',
   'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //products get routes
    Route::get('index/{id?}', [ProductController::class, 'index'])->name('index');
    //products post rou tes
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::put('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    //products delete route
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'orders', 'as' => 'orders.',
    'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //orders get routes
    Route::get('index/{id?}', [OrderController::class, 'index'])->name('index');
    //orders post routes
    Route::post('store', [OrderController::class, 'store'])->name('store');
    Route::put('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    //orders delete route
    Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
});

// Route::group(['prefix' => 'posts', 'as' => 'posts'], function () {
//     //posts get routes
//     Route::get('index/{id?}', [PostController::class, 'index'])->name('index');
//     //posts post routes
//     Route::post('add', [PostController::class, 'add'])->name('add');
//     Route::put('edit/{id}', [PostController::class, 'edit'])->name('edit');
//     //posts delete route
//     Route::delete('delete/{id}', [PostController::class, 'delete'])->name('delete');
// });

Route::group([
    'prefix' => 'factors', 'as' => 'factors.',
    // 'middleware' => 'auth:sanctum'
], function () {
    // factors get routes
    Route::get('index/{id?}', [FactorController::class, 'index'])->name('index');
    //factors post routes
    Route::post('store', [FactorController::class, 'store'])->name('store');
    Route::put('edit/{id}', [FactorController::class, 'edit'])->name('edit');
    //factors delete route
    Route::delete('delete/{id}', [FactorController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'teams', 'as' => 'teams.', 'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'], function () {
    //teams get route
    Route::get('index/{id?}', [TeamController::class, 'index'])->name('index');
    //teams post route
    Route::post('store', [TeamController::class, 'store'])->name('store');
    Route::put('edit/{id}', [TeamController::class, 'edit'])->name('edit');
    //team delete route
    Route::delete('delete/{id}', [TeamController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'tasks', 'as' => 'tasks.',
    'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //tasks get route
    Route::get('index/{id?}', [TaskController::class, 'index'])->name('index');
    //tasks post route
    Route::post('store', [TaskController::class, 'store'])->name('store');
    Route::put('edit/{id}', [TaskController::class, 'edit'])->name('edit');
    //tasks delete route
    Route::delete('delete/{id}', [TaskController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'notes', 'as' => 'notes.',
    'middleware' => 'auth:sanctum'
], function () {
    //notes get route
    Route::get('index/{id?}', [NoteController::class, 'index'])->middleware('permission:note.index')->name('index');
    //notes post route
    Route::post('store', [NoteController::class, 'store'])->name('store');
    Route::put('edit/{id}', [NoteController::class, 'edit'])->name('edit');
    //notes delete route
    Route::delete('delete/{id}', [NoteController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'tickets', 'as' => 'tickets.',
    'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //tickets get route
    Route::get('index/{id?}', [TicketController::class, 'index'])->name('index');
    //tickets post route
    Route::post('store', [TicketController::class, 'store'])->name('store');
    Route::put('edit/{id}', [TicketController::class, 'edit'])->name('edit');
    //tickets delete route
    Route::delete('delete/{id}', [TicketController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'massages', 'as' => 'massages.',
    'middleware' => 'auth:sanctum'
], function () {
    //massage get route
    Route::get('index/{id?}', [MassageController::class, 'index'])->name('index');
    //massage post route
    Route::post('store', [MassageController::class, 'store'])->name('store');
    Route::put('edit/{id}', [MassageController::class, 'edit'])->name('edit');
    //massage delete route
    Route::delete('delete/{id}', [MassageController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'warrenties', 'as' => 'warrenties.',
    'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //warrenties get route
    Route::get('index/{id?}', [WarrentyController::class, 'index'])->name('index');
    //warrenties post route
    Route::post('store', [WarrentyController::class, 'store'])->name('store');
    Route::put('edit/{id}', [WarrentyController::class, 'edit'])->name('edit');
    //warrenties delete route
    Route::delete('delete/{id}', [WarrentyController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => 'labels', 'as' => 'labels.',
    'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //label get route
    Route::get('index/{id?
    }', [LabelController::class, 'index'])->name('index');
    //label post route
    Route::post('store', [LabelController::class, 'store'])->name('store');
    Route::put('edit/{id}', [LabelController::class, 'edit'])->name('edit');
    //label delete route
    Route::delete('delete/{id}', [LabelController::class, 'delete'])->name('delete');
});

// Route::group([
//     'prefix' => 'medias' , 'as' => 'medias.',
//     'meddleware' => 'auth:sanctum'
// ], function(){
//     Route::get('index/{id?}', [Media::class, 'index'])->name('index');
//     // Route::post('store', [Media::class, 'store'])->name('store');
//     Route::post('store', [Media::class, 'store'])->name('store');
//     Route::delete('delete/{id}', [Media::class, 'delete'])->name('delete');
// });
Route::group([
    'prefix' => 'medias', 'as' => 'medias.',
    // 'middleware' => 'auth:sanctum', 'role:super_admin|user|admin|reseller|customer'
], function () {
    //media get route
    Route::get('index/{id?}', [MediaController::class, 'index'])->name('index');
    //media post route
    Route::post('store', [MediaController::class, 'store'])->name('store');
    Route::post('download', [MediaController::class, 'download'])->name('download');
    //media delete route
    Route::delete('delete/{id}', [MediaController::class, 'delete'])->name('delete');
});

Route::get('test', function(){
    ProductCreateJob::dispatch();
});

Route::get('sendmail', function(){

});
