@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <ul>
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->plot }}</p>
    </ul>
@endsection