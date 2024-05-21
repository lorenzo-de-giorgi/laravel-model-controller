@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <ul>
        @foreach ($books as $book)
            <li><a href="{{route('books.show', $book->id)}}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection