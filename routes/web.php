<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("auth")
    ->name("auth.")
    ->group(function () {
        Route::view("/login", "auth.login")
            ->middleware(['guest.only'])
            ->name("login");
        Route::post("/logout", function () {
            auth()->logout();
            return redirect()->to('/auth/login');
        })->name("logout");
    });

Route::prefix("superadmin")
    ->name('superadmin.')
    ->middleware(['auth.middleware'])
    ->group(function () {
        Route::view("/users", "superadmin.user.index")
            ->name('user.index');
        Route::view("/categories", "superadmin.category.index")
            ->name('category.index');
        Route::view("/products", "superadmin.product.index")
            ->name('product.index');
    });

