<?php

use Illuminate\Support\Facades\Route;

Route::group([], base_path('routes/web/user.php'));
Route::group([], base_path('routes/web/help.php'));
Route::group([], base_path('routes/web/product.php'));
Route::prefix('orders')->name('orders.')->group(base_path('routes/web/order.php'));
Route::prefix('admin')->name('admin.')->group(base_path('routes/web/admin.php'));