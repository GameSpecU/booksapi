<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookReservationsController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::get('authors/search/{search}', [\App\Http\Controllers\AuthorsController::class, 'search']);
Route::get('books/search/{search}', [\App\Http\Controllers\BooksController::class, 'search']);
Route::post('reservations', [BookReservationsController::class, 'store']);
Route::delete('reservations/{bookReservation}', [BookReservationsController::class, 'destroy']);
