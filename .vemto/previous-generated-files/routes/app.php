<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Generated by Vemto
|--------------------------------------------------------------------------
|
| It is not recommended to edit this file directly. Although you can do so,
| it will generate a conflict on Vemto's next build.
|
*/

// Dashboard
Route::prefix('/dashboard')
    ->name('dashboard.')
    ->group(function () {});

// API
Route::prefix('/api')
    ->name('api.')
    ->group(function () {});

// Site
Route::prefix('/')->group(function () {});

// Filament Panel
Route::prefix('/panel')
    ->name('panel.')
    ->group(function () {});