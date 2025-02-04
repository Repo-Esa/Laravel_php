<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\GenreController;
use App\Models\Genre;
use App\Http\Controllers\CastController;
use App\Models\Cast;





Route::get('/', function () {
return view('welcome');
});
// Route::get('/master', function () {
// return view('template.master');
// });

Route::get('/master', function () {
    return view('template.master');
    });



//     Route::get('/index', function () {
//         return view('index');
//         });
// // use app\Http\Controllers\{
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
route::get('/genre/create', [GenreController::class, 'create'])-> name('genre.create');
route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.delete');

route::get('/cast', [CastController::class, 'index'])->name('cast.index');
route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
route::delete('/cast{id}', [CastController::class, 'destroy'])->name('cast.delete');


// route untuk menampilkan form tambah genre dan menggunakan handler/ method adalah method ccreate
// route::get('/genre/create',[GenreController::class,'create'])->name('genre.create');
// // proses untuk menyimpan data dari form ke dalam database/table
// route::post('/genre',[GenreController::class,'store'])->name('genre.store');
// // proses untuk menyimpan data dari form ke dalam database/table
// route::post('/genre',[GenreController::class,'index'])->name('genre.index');
