<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/viewEmployee', function () {
    return view('viewEmployee');
});
