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



Route::get('/', function() {
    return view('welcome');
});

Route::get('/ordem', function () {
    return view('ordem');
});

Route::get('/programacao', function () {
    return view('programacao');
});

Route::get('/comprovante', function () {
    return view('comprovante');
});
