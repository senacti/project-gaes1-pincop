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
    return view ('Index');
});

Route::get('/inicio', function () {
    return view ('inicio');
});

Route::get('/registro', function () {
    return view ('registro');
});

Route::get('/recuperar', function () {
    return view ('recuperar');
});

Route::get('/inventario', function () {
    return view ('inventario');
});

Route::get('/dashboard', function () {
    return view ('dashboard');
});

Route::get('/hombre', function () {
    return view ('hombre');
});

Route::get('/mujer', function () {
    return view ('mujer');
});

Route::get('/niño', function () {
    return view ('niño');
});

Route::get('/nuevo', function () {
    return view ('nuevo');
});

Route::get('/404', function () {
    return view ('404');
});

Route::get('/404d', function () {
    return view ('404d');
});

Route::get('/500', function () {
    return view ('500');
});

Route::get('/500d', function () {
    return view ('500d');
});