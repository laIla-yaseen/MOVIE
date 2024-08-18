@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <a href="{{ route('movies.create') }}">Add New Movie</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->movie_description }}</td>
                    <td>{{ $movie->movie_genre }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection