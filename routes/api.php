<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['api'])->prefix('v1')->group(function () {
    Route::prefix('customer')->name('customer.')->controller(CustomerController::class)->group(function () {
        Route::get('list', 'list')->name('list');
    });
});

Route::middleware(['api'])->prefix('v1')->group(function () {
    Route::prefix('customer')->name('customer.')->controller(CustomerController::class)->group(function () {
        Route::get('test', 'test')->name('test');
    });
});
