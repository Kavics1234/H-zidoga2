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
    return view('auto');
});
Route::get('/tulajdonos', function () {
    return view('tulajdonos');
});
Route::get('/tulajdonos', function () {
    return view('tulajdonos');
});
Route::get('/baleset', function () {
    return view('baleset');
});
