<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function form()
    {
        return view('form');
    }
    public function end()
    {
        return view('end');
    }
}
