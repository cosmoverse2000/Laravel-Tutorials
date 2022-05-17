<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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

// $var = "hi ,my name is khan";
// $var = str::ucfirst($var);
// $var = Str::replaceFirst('Hi', 'Hello', $var);
// $var = Str::camel($var);
// echo $var;
$var = "hi ,my anme is kahn";
$var = Str::of($var)
    ->ucfirst($var)
    ->replaceFirst('Hi', 'Hello', $var)
    ->camel($var);
echo $var;

Route::get('/', function () {
    return view('welcome');
});
