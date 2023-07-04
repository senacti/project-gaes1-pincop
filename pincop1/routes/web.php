<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarketingController;


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

Route::get('/cliente', function () {
    return view ('cliente');
});

Route::get('/marketing', function () {
    return view ('marketing');
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

Route::get('inventario/pdf', [ProductoController::class, 'pdf'])->name('inventario.pdf');
Route::get('cliente/pdf', [ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::get('marketing/pdf', [MarketingController::class, 'pdf'])->name('marketing.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('inventario', ProductoController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('marketing', MarketingController::class);