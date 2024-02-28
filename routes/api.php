<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KurssController;
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


use App\Http\Controllers\Api\MainController;
Route::get('/get_message', [MainController::class,'getMessage']);


Route::get('/kurss', [KurssController::class, 'index']);
Route::post('/kurss', [KurssController::class, 'store']);

