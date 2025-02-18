@extends('layouts.master')
@section('content')

<!-- Search Bar -->
<div class="container my-4">
    <form action="{{route('movie.explore')}}" method="GET" class="d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Search movies..." >
        <button type="submit" class="btn btn-danger">Search</button>
    </form>
</div>

<!-- Movies Section -->
<div class="movies container">
    <h1 class="text-center mb-4">Explore Movies</h1>

    <div class="row">
        @if($movies->count() > 0)
            @foreach ($movies as $movie)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="movie">
                        <a href="{{ route('movie.detail', ['slug' => $movie->slug]) }}">
                            <img src="{{ $movie->image_url }}" alt="Movie">
                            <div class="movie-title">{{ $movie->title }}</div>
                            <p>{{ $movie->category->name }}</p>
                            <p>{{ Str::limit($movie->description, 50) }}</p>
                        </a>
                    </div>
                </div>
            @endforeach  
        @else
            <h4 class="text-center">Movies Not Available</h4>
        @endif
    </div>
</div>

<!-- Pagination Links -->
<div class="col-12 my-3">
    <nav aria-label="Page navigation">
        {{ $movies->appends(['search' => request('search')])->links('pagination::bootstrap-5') }}
    </nav>
</div>

@endsection
