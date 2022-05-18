<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberControler;

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
Route::post('data', [memberControler::class, 'index']);
Route::put('update', [memberControler::class, 'update']);
Route::delete('delete/{id}', [memberControler::class, 'delete']);
Route::get('search/{name}', [memberControler::class, 'search']);
