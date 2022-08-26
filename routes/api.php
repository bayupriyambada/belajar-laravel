<?php

use App\Http\Controllers\Todos2Controller;
use App\Http\Controllers\TodosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todo',[TodosController::class, 'index']);
Route::post('todo',[TodosController::class, 'store']);
Route::get('todo/{id}',[TodosController::class, 'show']);
Route::put('todo/{id}',[TodosController::class, 'update']);
Route::delete('todo/{id}',[TodosController::class, 'destroy']);

Route::resource('todos', Todos2Controller::class);
// Route::get('todo','App\Http\Controllers\TodosController@index');
