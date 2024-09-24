<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeederController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seed-database', [SeederController::class, 'seed']);
Route::get('/get-products', [ProductController::class, 'index']);
