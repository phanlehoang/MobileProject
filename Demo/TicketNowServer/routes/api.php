<?php

use Illuminate\Http\Request;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group([
    'middleware' => 'auth:api'
], function() {
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'identify']);
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::post('/movie/show', [\App\Http\Controllers\MovieController::class, 'find']);
    Route::post('/ticket/book', [\App\Http\Controllers\TicketController::class, 'book']);
    Route::get('/ticket/index', [\App\Http\Controllers\TicketController::class, 'index']);
    Route::post('/movie/index', [\App\Http\Controllers\MovieController::class, 'index']);
    Route::post('/ticket/delete', [\App\Http\Controllers\TicketController::class, 'delete']);
    Route::get('/cinema/index', [\App\Http\Controllers\CinemaController::class, 'index']);
});
