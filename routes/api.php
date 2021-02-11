<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BookController;

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

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

// Route::middleware('auth:api')->group(function () {
// Route::resource('books', 'App\Http\Controllers\API\BookController');
// Route::get('books', [BookController::class, 'index'])->middleware('auth:api');
// Route::post('books', [BookController::class, 'store'])->middleware('auth:api');
// Route::get('book', [BookController::class, 'show'])->middleware('auth:api');
// Route::post('book', [BookController::class, 'update'])->middleware('auth:api');
// Route::delete('book', [BookController::class, 'destroy'])->middleware('auth:api');
// });
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();->middleware('auth:api')
// });

Route::middleware('auth:api')->group(function () {
    Route::resource('books', 'App\Http\Controllers\API\BookController');
});
