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

// region Public Channels Routes
Route::get('/sender', function(){
    return view('sender');
})->name('sender');

Route::post('/event', function(){

    $text = request()->content;
    event(new EventTriggered($text));

    return redirect()->route('sender');
});

Route::get('/listener', function(){
    return view('listener');
});
// endregion

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/post', 'PostController@getAll')->name('post');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post', 'PostController@store');
});
