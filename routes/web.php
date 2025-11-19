<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/superadmin/users", "superadmin.user.index")
    ->name('superadmin.user.index');
Route::view("/superadmin/categories", "superadmin.category.index")
    ->name('superadmin.category.index');
Route::view("/superadmin/products", "superadmin.product.index")
    ->name('superadmin.product.index');
