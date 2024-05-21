@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container text-center">
        <h1>{{ $book->title }}</h1>
        <img src="{{ $book->cover_image }}" alt="">
        <p>{{ $book->plot }}</p>
    </div>
@endsection