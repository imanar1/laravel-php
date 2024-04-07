<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;


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


Route::get('/dashbaord',[Dashboard::class,'Index'])->name('index');
Route::get('/dashbaord/products',[Dashboard::class,'GetProducts'])->name('products');
Route::post('/dashbaord/createProducts',[Dashboard::class,'createProducts'])->name('createproducts');
Route::match(['get', 'post'],'/delete{id}',[Dashboard::class,'delete'])->name('delete-item');
Route::post('/dashbaord/createProducts',[Dashboard::class,'createProducts'])->name('createproducts');
Route::get('/edit{name}',[Dashboard::class,'EditProducts'])->name('edit');
Route::get('/dashbaord/update',[Dashboard::class,'update'])->name('update');
Route::get('/dashbaord/search',[Dashboard::class,'search'])->name('search');

Route::post('/dashbaord/add', [Dashboard::class, 'detail'])->name('store.product');
Route::get('/dashbaord/cart', [Dashboard::class, 'show'])->name('cart');
Route::get('/invoice', [Dashboard::class, 'showin'])->name('invoice');




Route::get('/', function () {
    return view('welcome');
});




//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
