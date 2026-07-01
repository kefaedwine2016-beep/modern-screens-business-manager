<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteVisitController;

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| Customers
|--------------------------------------------------------------------------
*/

Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers.index');

Route::get('/customers/create', [CustomerController::class, 'create'])
    ->name('customers.create');

Route::post('/customers', [CustomerController::class, 'store'])
    ->name('customers.store');

/*
|--------------------------------------------------------------------------
| Site Visits
|--------------------------------------------------------------------------
*/

Route::get('/sitevisits', [SiteVisitController::class, 'index'])
    ->name('sitevisits.index');

Route::get('/sitevisits/create', [SiteVisitController::class, 'create'])
    ->name('sitevisits.create');

Route::post('/sitevisits', [SiteVisitController::class, 'store'])
    ->name('sitevisits.store');

/*
|--------------------------------------------------------------------------
| Measurements (Legacy - Version 1)
|--------------------------------------------------------------------------
*/

Route::get('/measurements', [MeasurementController::class, 'index'])
    ->name('measurements.index');

Route::get('/measurements/create', [MeasurementController::class, 'create'])
    ->name('measurements.create');

Route::post('/measurements', [MeasurementController::class, 'store'])
    ->name('measurements.store');

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products', [ProductController::class, 'store'])
    ->name('products.store');