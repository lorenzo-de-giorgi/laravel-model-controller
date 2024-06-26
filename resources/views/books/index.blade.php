@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <ul class="d-flex flex-wrap">
        @foreach ($books as $book)
            <div class="card ms-4 mt-3" style="width: 18rem;">
                <img src="{{ $book->cover_image }}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    </ul>
@endsection