<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(OrderController::class)->group(function () {
    Route::get('/', 'index')->name('orders.index');
    Route::get('/{id}', 'show')->name('orders.show');
});