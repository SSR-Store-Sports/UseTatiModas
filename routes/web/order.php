<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->controller(OrderController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/details', 'details');
});