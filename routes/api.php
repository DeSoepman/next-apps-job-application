<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Business\BusinessController;

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

/* Return list of countries that have at least one business */
Route::get('/countries',        [HomeController::class, 'ApiGetCountries']);

/* Return list of businesses, with or without filtering */
Route::get('/businesses',       [BusinessController::class, 'ApiGetBusinesses']);

/* Return specific business */
Route::get('/business/{id}',    [BusinessController::class, 'ApiGetBusinessById']);
