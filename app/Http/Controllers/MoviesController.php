<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route('movie.index');
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        return redirect()->route('movie.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete(); // هنا استخدم الحذف الناعم
        return redirect()->route('movie.index');
    }
}