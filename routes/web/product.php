<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'show']);
Route::get('/search', [ProductController::class, 'search']);

// Rotas para gerencimento do carrinho de compras
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
