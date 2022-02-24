<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticaleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articale',[ArticaleController::class, 'list']);
Route::get('/delete/{id}', [ArticaleController::class, 'delete']);
Route::get('/showdata/{id}', [ArticaleController::class, 'show_data']);
Route::post('/savedata', [ArticaleController::class, 'save_data']);
