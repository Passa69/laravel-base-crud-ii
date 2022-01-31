@extends('layouts.main-layout')
@section('content')
    <h1>Films:</h1>

    <h3>
        <a href="{{ route('create') }}">CREATE NEW MOVIE</a>
    </h3>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('show', $movie -> id) }}">
                    {{ $movie -> title }} <br>
                </a>

                release: {{ $movie -> release_date }} <br>

                <a href="{{ route('edit', $movie -> id) }}">
                    Edit <br>
                </a>

                <a href="{{ route('delete', $movie -> id) }}">
                    Delete <br>
                </a>
                <hr>
            </li>
        @endforeach
    </ul>
@endsection