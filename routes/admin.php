<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;

Route::get('',[HomeController::class, 'inicio']);
Route::get('/view-products',[HomeController::class, 'index']);
Route::get('/create-products',[HomeController::class, 'create'])->name('create-products');