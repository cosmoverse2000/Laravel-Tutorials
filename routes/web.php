<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/main', [mainController::class, 'index']);
Route::get('/main', 'mainController@index');

Route::post('payment', 'mainController@payment');
Route::post('pay', 'mainController@pay');

// rzp_test_o1h6ExAiHPBUQw
//9Y5UP61XX8aC9xUIPYQ1s4zj
