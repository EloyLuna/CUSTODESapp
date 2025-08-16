<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/buy', function () {
    return view('buy');
});
Route::get('/inicio', function () {
    return view('inicio');
});