<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Web routes
Route::get('search', [SearchController::class, 'search']); // Use an array instead of a string for controller method reference

// API routes
Route::patch('/api/products/{id}', 'ProductApiController@update');

// ...
