<?php
use App\Http\Controllers\HelpController;
use Illuminate\Support\Facades\Route;

Route::get('/help', [HelpController::class, 'index']);
Route::get('/help-guide', [HelpController::class, 'helpGuide']);
