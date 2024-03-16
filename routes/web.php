<?php

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

// product get routes
Route::get('/products/add', function () {
    return view('products.add');
});

Route::get('/products/edit/{id}', function ($id) {

    $product = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ["product" => $product]);
});

Route::get('/products/index', function () {

    $products = DB::table('products')->get();
    return view('products.index', ["products" => $products]);
});

//product post routes
Route::post('/products/add', function (Request $request) {


    DB::table('products')->insert([
        "product_name" => $request->product_name,
        "product_code" => $request->product_code,
        "product_price" => $request->product_price,
        "inventory" => $request->inventory,

    ]);
    return redirect('/products/index');
});

Route::post('/products/edit/{id}', function (Request $request, $id) {

    DB::table('products')->where('id', $id)->update([
        "product_name" => $request->product_name,
        "product_code" => $request->product_code,
        "product_price" => $request->product_price,
        "inventory" => $request->inventory,
    ]);
    return "محصول با موفقیت ویرایش شد";
});


// product delete route

Route::delete('/products/delete/{id}', function ($id) {

    DB::table('products')->where('id', $id)->delete();

    return redirect('/products/index');
});


//users get routes

Route::get('/users/add', function () {
    return view('users.add');
});

Route::get('/users/edit/{id}', function ($id) {
    $users = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ["users" => $users]);
});

Route::get('/users/index', function () {

    $users = DB::table('users')->get();
    return view('users.index', ["users" => $users]);
});

//users post routes

Route::post('/users/add', function (Request $request) {

    DB::table('users')->insert([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "phone_number" => $request->phone_number,
        "email" => $request->email,
        "password" => $request->password,
        "gender" => $request->gender,
    ]);
    return redirect('/users/index');
});

Route::post('/users/edit/{id}', function (Request $request, $id) {

    DB::table('users')->where('id', $id)->update([
        "name" => $request->name,
        "last_name" => $request->last_name,
        "phone_number" => $request->phone_number,
        "email" => $request->email,
        "gender" => $request->gender,
    ]);
    return redirect('/users/index');
});

//users delete route

Route::delete('/users/delete/{id}', function ($id) {

    DB::table('users')->where('id', $id)->delete();
    return redirect('/users/index');
});


//orders get routes

Route::get('/orders/add', function () {
    return view('orders.add');
});

Route::get('/orders/edit/{id}', function ($id) {
    $orders = DB::table('orders')->where('id', $id)->first();
    return view('orders.edit', ["orders" => $orders]);
});

Route::get('/orders/index', function () {

    $orders = DB::table('orders')->get();
    return view('orders.index', ["orders" => $orders]);
});


//orders post routes

Route::post('/orders/add', function (Request $request) {

    DB::table('orders')->insert([

        "order_name" => $request->order_name,
        "order_code" => $request->order_code,
        "order_delivery_time" => $request->order_delivery_time,
        "delivery_method" => $request->delivery_method,
    ]);
    return redirect('/orders/index');
});

Route::post('/orders/edit/{id}' , function(Request $request, $id){

    DB::table('orders')->where('id' , $id)->update([
        "order_name" => $request->order_name,
        "order_code" => $request->order_code,
        "order_delivery_time" => $request->order_delivery_time,
        "delivery_method" => $request->delivery_method,
    ]);
    return redirect('/orders/index');
});


//orders delete route

Route::delete('/orders/delete/{id}' , function($id){

    DB::table('orders')->where('id' , $id)->delete();
    return redirect('/orders/index');
});
