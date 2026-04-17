<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UsersController::class, 'login']);
Route::get('/register', [UsersController::class, 'register']);
Route::get('/reset-shipping', [UsersController::class, 'resetShipping']);
Route::get('/reset-password', [UsersController::class, 'resetPassword']);

Route::get('/help', [HelpController::class, 'index']);
Route::get('/help-guide', [HelpController::class, 'helpGuide']);

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/search', [ProductController::class, 'search']);

Route::get('/profile', [UsersController::class, 'indexUserPassword']);
Route::get('/reset-user-password', [UsersController::class, 'resetUserPassword']);

Route::get('/cart', [CartController::class, 'index']);
