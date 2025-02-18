@extends('layouts.master')
@section('content') 
 <!-- Movie Details Section -->
    <div class="unique-movie-details container">
        <div class="row">
            <!-- Movie Poster -->
            <div class="col-md-4 unique-movie-poster">
                <img src="{{$movie->image_url}}" alt="Movie Poster">
            </div>

            <!-- Movie Description -->
            <div class="col-md-8">
                <h1 class="unique-movie-title">{{$movie->title}} <span class="fs-6">({{$movie->category->name}})</span></h1>
                <p class="unique-movie-info">Release Date: <span>{{$movie->date}}</span></p>
                <p class="unique-movie-info">Genre: <span>{{$movie->genre}}</span></p>
                <p class="unique-movie-info">Duration: <span>{{$movie->duration}}</span></p>
                <p class="unique-movie-info">Description: <span>{{$movie->description}}</span></p>
                <button class="btn btn-danger unique-btn-watch">Watch Now</button>
                <p class="unique-movie-info"> Posted on : {{$movie->created_at->format('M d,Y')}}</p>
            </div>
        </div>
    </div>
    
    <div class="movies container">
        <h1 class="text-center mb-4">Related Movies</h1>
        <div class="row">

        @foreach ($related_movies as $movie ) 
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="movie">
                <a href="{{route('movie.detail',['slug'=>$movie->slug])}}">
                <img src="{{$movie->image_url}}" alt="Movie">
                <div class="movie-title">{{$movie->title}}</div>
                <p>{{Str::limit($movie->description,50)}}</p>
                </a>
            </div>
</div>
        @endforeach
        </div>
    </div>

           
@endsection    

   