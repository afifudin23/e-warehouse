<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/auth/login');

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

Route::view("/dashboard", "dashboard")
    ->name("dashboard")
    ->middleware(["auth.middleware"]);


Route::prefix("superadmin")
    ->name('superadmin.')
    ->middleware(['auth.middleware', 'role:superadmin'])
    ->group(function () {
        Route::view("/users", "superadmin.user.index")
            ->name('user.index');
        Route::view("/categories", "superadmin.category.index")
            ->name('category.index');
        Route::view("/products", "superadmin.product.index")
            ->name('product.index');
    });

Route::prefix("admin")
    ->name('admin.')
    ->middleware(['auth.middleware', 'role:admin'])
    ->group(function () {
        Route::view("/products", "admin.product.index")
            ->name('product.index');
    });

