<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search', [ProductController::class, 'search']);

// Rotas para gerenciamento do carrinho de compras do usuário
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');

// Rota de checkout para dicirecionar usuários com items pra tela de finalização
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
