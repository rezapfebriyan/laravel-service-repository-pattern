<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/{id}', [ContactController::class, 'show']);

Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);
