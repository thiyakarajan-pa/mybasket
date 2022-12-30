<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\HomeController;

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
//     return view('index', 'ProductController@index');
// });

Route::get('/index', [ProductController::class, 'index']);

Route::get('/view/{item}', [ProductController::class, 'getItem']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::POST('checkout', [HomeController::class, 'checkout'])->name('checkout');

