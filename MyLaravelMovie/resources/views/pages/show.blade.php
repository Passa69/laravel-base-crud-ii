@extends('layouts.main-layout')
@section('content')
    <h1>Film:</h1>

    <h2>TITLE: {{ $movie -> title }}</h2>
    <h3>SUBTITLE: {{ $movie -> subtitle }}</h3>
    <P>RELEASE: {{ $movie -> release_date }}</P>

    <a href="{{ route('visible', $movie -> id) }}">
        Visible <br>
    </a>
@endsection