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
Route::get('/todo_trash', [TodoController::class ,'index_trash'] );
Route::get('/todo/{id}', [TodoController::class ,'show'] );
Route::post('/todo/insert', [TodoController::class ,'insert'] );
Route::put('/todo/update/{id}', [TodoController::class ,'update'] );
Route::put('/todo/order/{id}', [TodoController::class ,'order'] );
Route::post('/todo/completed/{id}', [TodoController::class ,'completed'] );
Route::delete('/todo/delete/{id}', [TodoController::class ,'delete'] );
Route::post('/todo/recover/{id}', [TodoController::class ,'recover'] );
Route::delete('/todo/destroy/{id}', [TodoController::class ,'destroy'] );
