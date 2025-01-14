<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::get('/index', function () {
return view('index');
});

Route::get('/form', function () {
return view('form');
});

Route::get('/end', function () {
return view('end');
});

