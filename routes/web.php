<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});
// Route::get('/master', function () {
// return view('template.master');
// });

Route::get('/master', function () {
    return view('template.master');
    });

    Route::get('/index', function () {
        return view('index');
        });
// use app\Http\Controllers\{
//     BookController
// };

// route::get('/index',[BookController::class,'index']);
// route::get('/form',[BookController::class,'form']);

// File routes/web.php
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('layouts.about');
// });
