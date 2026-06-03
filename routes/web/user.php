<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::controller(UsersController::class)->group(function () {
    Route::get('/sign-in', 'signIn')->name('sign-in');
    Route::post('/sign-in', 'signInSessions')->name('sign-in');

    Route::get('/sign-up', 'signUp')->name('sign-up');
    Route::post('/sign-up', 'signUpRegister')->name('sign-up');

    Route::get('/reset-shipping', 'resetShipping');
    Route::get('/reset-password', 'resetPassword');
});

Route::middleware('auth')->group(function () {
    Route::controller(UsersController::class)->group(function () {
        Route::get('/profile', 'indexUserPassword')->name('profile');
        Route::put('/profile', 'updateProfile')->name('profile.update');
        Route::delete('/profile', 'destroyProfile')->name('profile.destroy');
        Route::post('/logout', 'logout')->name('logout');
    });
});
