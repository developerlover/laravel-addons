<?php

use Developerlover\LaravelAddons\Http\Middleware\Authenticate;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\ForgotPasswordFormController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\LoginController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\LogoutController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\ResetPasswordController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\ResetPasswordFormController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\SendResetLinkEmailController;
use Developerlover\LaravelAddons\Http\Controllers\Admin\Auth\ShowLoginFormController;
use Developerlover\LaravelAddons\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['web'],
], static function () {
    Route::middleware([
        Authenticate::class,
    ])->group(static function () {
        Route::post('/logout', LogoutController::class)->name('logout');
    });

    Route::middleware([
        RedirectIfAuthenticated::class,
    ])->group(static function () {
        Route::get('/login', ShowLoginFormController::class)->name('login');
        Route::post('/login', LoginController::class)->name('auth');
        Route::get('/password/reset', ForgotPasswordFormController::class)->name('password.request');
        Route::post('/password/email', SendResetLinkEmailController::class)->name('password.email');
        Route::get('/password/reset/{token}', ResetPasswordFormController::class)->name('password.reset');
        Route::post('/password/reset', ResetPasswordController::class)->name('password.update');
    });
});
