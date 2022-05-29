<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ProductsController::class,'index'])->name('/');


Route::get('/nav', function () {
    return view('navbar');
});


Route::get('/addproduct', function () {
    return view('AddNewProduct');
});

Route::post('/addproduct',[ProductsController::class,'store'])->name('add');


