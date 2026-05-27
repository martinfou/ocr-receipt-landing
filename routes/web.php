<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LicenseController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/subscribe', [LandingController::class, 'subscribe'])->name('subscribe');

// Stripe checkout
Route::post('/checkout', [LicenseController::class, 'checkout'])->name('license.checkout');
Route::get('/checkout/success', [LicenseController::class, 'success'])->name('license.success');
Route::get('/checkout/cancel', [LicenseController::class, 'cancel'])->name('license.cancel');

// Download page (with license verification)
Route::get('/download/{email}/{licenseKey}', [LicenseController::class, 'download'])->name('license.download');
Route::get('/download-file/{filename}', [LicenseController::class, 'serveFile'])->name('license.serve');
