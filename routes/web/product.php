<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search', [ProductController::class, 'search']);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/buy-now', [CartController::class, 'buyNow'])->name('cart.buy-now');
Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');

Route::middleware('auth')->get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::middleware('auth')->post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::middleware('auth')->get('/checkout/confirmation', [CheckoutController::class, 'confirmation'])->name('checkout.confirmation');
