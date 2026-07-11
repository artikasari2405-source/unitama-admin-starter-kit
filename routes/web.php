<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',  [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/user', UserController::class);
