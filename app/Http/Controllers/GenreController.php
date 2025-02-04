<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Attributes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genre = DB::table('genre') -> get();
        //return ke view
        return view('genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|min:5'
        ]);

        //query untuk save data
        $query = DB::table('genre')-> insert([
            'nama' => $request['nama'],
        ]);

        return redirect()->route('genre.index')->with(['success' => 'data telah disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mengambil data dari database
        $genre= DB::table('genre')->where('id', $id)->first();
        //Menampilan View edit date
        return view('genre.update', compact('genre'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'nama' => 'required|min:5',
        ]);

        //query untuk menyimpan data
        $query = DB::table('genre')
        ->where('id', $id)
        ->update([
            'nama' => $request['nama'],
        ]);

        return redirect()->route('genre.index')->with(['success' => 'data telah berhasil di edit']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('genre')
        -> where('id', $id)
        ->delete();

        return redirect() ->route('genre.index') ->with(['success' => 'data telah dihapus']);;
    }
}