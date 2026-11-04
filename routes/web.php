<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\BlogController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/alternative-hubdoc', [LandingController::class, 'hubdoc'])->name('hubdoc');
Route::get('/sitemap.xml', [LandingController::class, 'sitemap'])->name('sitemap');
Route::get('/fr', [LandingController::class, 'french'])->name('french');
Route::get('/dl/{platform}', [LandingController::class, 'download'])->name('download');
Route::get('/api/stats', [LandingController::class, 'stats'])->name('stats');
Route::get('/vs/dext', [LandingController::class, 'vsDext'])->name('vs.dext');
// English Blog routes
Route::get('/blog', [BlogController::class, 'index'])->defaults('locale', 'en')->name('blog.en');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->defaults('locale', 'en')->name('blog.article.en');

// French Blog routes
Route::get('/fr/blog', [BlogController::class, 'index'])->defaults('locale', 'fr')->name('blog.fr');
Route::get('/fr/blog/{slug}', [BlogController::class, 'show'])->defaults('locale', 'fr')->name('blog.article.fr');
Route::post('/subscribe', [LandingController::class, 'subscribe'])->name('subscribe');

// Stripe checkout & email verification (Epic S1)
Route::post('/checkout', [LicenseController::class, 'checkout'])->name('license.checkout');
Route::get('/checkout/verify', [LicenseController::class, 'showVerify'])->name('license.verify');
Route::post('/api/verify/send', [LicenseController::class, 'sendVerification'])->name('license.verify.send');
Route::post('/api/verify/confirm', [LicenseController::class, 'confirmVerification'])->name('license.verify.confirm');
Route::post('/api/stripe/webhook', [LicenseController::class, 'webhook'])->name('license.webhook');
Route::get('/checkout/success', [LicenseController::class, 'success'])->name('license.success');
Route::get('/checkout/cancel', [LicenseController::class, 'cancel'])->name('license.cancel');

// Download page (with license verification)
Route::get('/download/{email}/{licenseKey}', [LicenseController::class, 'download'])->name('license.download');
Route::get('/download-file/{filename}', [LicenseController::class, 'serveFile'])->name('license.serve');

// Health / status
Route::get('/api/status', [LicenseController::class, 'status'])->name('license.status');

// Appcast (auto-update feed for desktop app)
Route::get('/appcast.xml', [LicenseController::class, 'appcast'])->name('license.appcast');
