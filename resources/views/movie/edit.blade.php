@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="movie_name">Movie Name:</label>
        <input type="text" name="movie_name" id="movie_name" value="{{ $movie->movie_name }}">
        
        <label for="movie_description">Description:</label>
        <textarea name="movie_description" id="movie_description">{{ $movie->movie_description }}</textarea>

        <label for="movie_genre">Genre:</label>
        <input type="text" name="movie_genre" id="movie_genre" value="{{ $movie->movie_genre }}">

        <button type="submit">Update Movie</button>
    </form>
@endsection