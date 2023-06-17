<?php

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
    return view ('Index');
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/register', function () {
    return view ('register');
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

Route::get('/nino', function () {
    return view ('nino');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
