<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('categories')->group(function () {
    Route::get('/index',[
        'as'=> 'categories.index',
        'uses'=>'CategoryController@index'
    ] );
    Route::get('/create',[
        'as'=> 'categories.create',
        'uses'=>'CategoryController@create'
    ] );
});