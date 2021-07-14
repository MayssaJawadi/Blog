<?php

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

Route::get('/articles', function () {
    echo "Im Mayssa";
});

Route::get('/user/{name}', function ($name) {
    return "Good Morning {$name}";
   });

   Route::get('/user/{name}/{age}', function ($name, $age) {
    return "<h1>I am {$name} and my age is {$age}</h1>";
   });

   Route::get('/user/{name}/{age}/{city}', function ($name, $age, $city) {
    return "<b>I am {$name} and my age is {$age} and I'm live in  {$city}</b>";
   });

   Route::get('/divide/{a}/{b}', function ($a, $b) {
    return  $a + $b;
   });