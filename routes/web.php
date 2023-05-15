<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage');
});

Route::view('/signup', 'signup');
Route::view('/signin', 'signin');
