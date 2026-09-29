<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Neils Route";
});

Route::get('/test', function () {
    return view('welcome');
});

