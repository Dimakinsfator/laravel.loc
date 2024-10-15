<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test1', function () {
   return'Hello World';
});

Route::redirect('/test2','test1', 302);
Route::permanentRedirect('/test3', 'test1');

Route::view('/test4', 'welcome'[]);
