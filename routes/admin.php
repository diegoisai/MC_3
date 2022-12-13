<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProductsController;

Route::get('',[HomeController::class, 'inicio']);
Route::resource('/products-index', ProductsController::class);