@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container text-center">
        <h1>{{ $movie->title }} ({{$movie->original_title}})</h1>
        <img src="{{ $movie->image }}" alt="">
        <p>Data Pubblicazione: {{ $movie->date }}</p>
    </div>
@endsection