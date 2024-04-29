<?php

use App\Http\Controllers\Api\Health;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//make health check route
Route::get('/health', [Health::class, 'index']);

// prefix table in store
Route::prefix('table')->group(function () {
    //CURD
    Route::get('/', [TableController::class, 'index']);
    Route::post('/', [TableController::class, 'store']);
    Route::get('/{id}', [TableController::class, 'show']);
    Route::put('/{id}', [TableController::class, 'update']);
    Route::delete('/{id}', [TableController::class, 'destroy']);
});









