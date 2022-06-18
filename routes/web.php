<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('/index');
});

Route::get('/home/main', function () {
    return view('/home/main');
});

Route::get('/company/introduce', function () {
    return view('/company/introduce');
});

Route::get('/company/history', function () {
    return view('/company/history');
});

Route::get('/company/portfolio', function () {
    return view('/company/portfolio');
});


Route::get('/company/scrollspy', function () {
    return view('/company/scrollspy');
});

Route::get('/company/SwiperTest', function () {
    return view('/company/SwiperTest');
});
