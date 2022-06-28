<?php

use App\Http\Controllers\TodoController;
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

Route::get('/todo', [TodoController::class ,'index'] );
Route::get('/todo/{id}', [TodoController::class ,'show'] );
Route::post('/todo/insert', [TodoController::class ,'insert'] );
Route::post('/todo/update/{id}', [TodoController::class ,'update'] );
Route::post('/todo/completed/{id}', [TodoController::class ,'completed'] );
Route::post('/todo/delete/{id}', [TodoController::class ,'delete'] );
