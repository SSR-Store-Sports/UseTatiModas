<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'show']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/cart', [CartController::class, 'index']);
