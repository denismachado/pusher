<?php

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


use App\Events\EventTriggered;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sender', function(){
    return view('sender');
});

Route::post('/event', function(){

    $text = request()->content;
    event(new EventTriggered($text));
});

Route::get('/listener', function(){
    return view('listener');
});