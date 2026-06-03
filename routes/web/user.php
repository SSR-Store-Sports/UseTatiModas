<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MagicLinkController;
use Illuminate\Support\Facades\Route;

Route::controller(UsersController::class)->group(function () {
    Route::get('/sign-in', 'signIn')->name('sign-in');
    Route::post('/sign-in', 'signInSessions')->name('sign-in');

    Route::get('/sign-up', 'signUp')->name('sign-up');
    Route::post('/sign-up', 'signUpRegister')->name('sign-up');

    Route::get('/reset-shipping', 'resetShipping');
    Route::get('/reset-password', 'resetPassword');
});

Route::post('/magic-link', [MagicLinkController::class, 'send'])->name('magic-link.send');
Route::get('/magic-link/{token}', [MagicLinkController::class, 'login'])->name('magic-link.login');

Route::get('/verify-email/{token}', function (string $token) {
    $record = \App\Models\LoginToken::where('token', $token)->first();

    if (!$record || !$record->isValid()) {
        return redirect()->route('sign-in')->with('message', 'Link de verificação inválido ou expirado.');
    }

    $user = $record->user;
    $user->update(['status' => 'active']);
    $record->delete();

    return redirect()->route('sign-in')->with('message', 'Conta ativada com sucesso! Faça login.');
})->name('verify-email');

Route::middleware('auth')->group(function () {
    Route::controller(UsersController::class)->group(function () {
        Route::get('/profile', 'indexUserPassword')->name('profile');
        Route::put('/profile', 'updateProfile')->name('profile.update');
        Route::put('/profile/address', 'updateAddress')->name('profile.address.update');
        Route::delete('/profile', 'destroyProfile')->name('profile.destroy');
        Route::post('/logout', 'logout')->name('logout');
    });
});
