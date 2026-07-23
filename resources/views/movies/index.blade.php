@extends('layouts.layoutDefault')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h1 class="fw-bold">
        <i class="bi bi-camera-reels-fill text-danger"></i>
        Film
    </h1>

    <a href="{{ route('movies.create') }}" class="btn btn-add-movie">
        <i class="bi bi-plus-circle me-2"></i>
        Nuovo Film
    </a>

</div>


<div class="row g-4">

@foreach($movies as $movie)

    <div class="col-xl-3 col-lg-4 col-md-6">

        <div class="card movie-card h-100 shadow-sm border-0">

            <img 
                src="{{ asset('storage/' . $movie->poster) }}"
                class="card-img-top movie-poster"
                alt="{{ $movie->title }}"
            >

            <div class="card-body text-center">

                <h5 class="card-title fw-bold">
                    {{ $movie->title }}
                </h5>

                <p class="text-muted mb-1">
                    <i class="bi bi-calendar"></i>
                    {{ $movie->release_year }}
                </p>

                <p class="text-muted">
                    <i class="bi bi-tag"></i>
                    {{ $movie->genre->name }}
                </p>


                <a href="{{ route('movies.show', $movie->id) }}"
                   class="btn btn-primary w-100">

                    <i class="bi bi-eye me-2"></i>
                    Dettagli

                </a>

            </div>

        </div>

    </div>

@endforeach

</div>

@endsection