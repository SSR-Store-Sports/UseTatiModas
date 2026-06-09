<?php

use Illuminate\Support\Facades\Route;

Route::group([], base_path('routes/web/user.php'));
Route::group([], base_path('routes/web/help.php'));
Route::group([], base_path('routes/web/product.php'));
Route::prefix('orders')->name('orders.')->group(base_path('routes/web/order.php'));
Route::prefix('admin')->name('admin.')->group(base_path('routes/web/admin.php'));

Route::post('/locale', function (\Illuminate\Http\Request $request) {
    $locale = $request->input('locale');
    if (in_array($locale, ['pt-BR', 'en'])) {
        $request->session()->put('locale', $locale);
        $request->session()->save();
    }
    return back();
})->name('locale.set');
