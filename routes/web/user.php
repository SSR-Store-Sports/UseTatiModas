<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::controller(UsersController::class)->group(function () {
    Route::get('/sign-in', 'signIn');
    Route::post('/sign-in', 'signInSessions');

    Route::get('/sign-up', 'signUp');

    Route::get('/reset-shipping', 'resetShipping');
    Route::get('/reset-password', 'resetPassword');

    Route::get('/profile', 'indexUserPassword');
    // Route::get('/reset-user-password', 'resetUserPassword');
});
