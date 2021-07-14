<?php

use App\Http\Controllers\ContactController;
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

Route::prefix('contacts')->group(function () {
    Route::get('{limit?}', [ContactController::class, 'index']);
    Route::post('', [ContactController::class, 'store']);
    Route::delete('{id}', [ContactController::class, 'destroy']);
});
