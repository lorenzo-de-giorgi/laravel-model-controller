@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <ul class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card ms-4 mt-3" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <a href="{{route('movies.show', $movie->id)}}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    </ul>
@endsection