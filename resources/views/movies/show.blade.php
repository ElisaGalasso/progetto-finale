@extends('layouts.layoutDefault')

@section('content')


<div class="container">

    <div class="movie-detail-card shadow-lg">


        <div class="row g-0">


            {{-- Copertina --}}
            <div class="col-md-4">

                <img 
                    src="{{ asset('storage/' . $movie->poster) }}"
                    class="movie-detail-poster"
                    alt="{{ $movie->title }}"
                >

            </div>



            {{-- Dettagli --}}
            <div class="col-md-8">


                <div class="p-4">


                    <h1 class="fw-bold mb-3">
                        {{ $movie->title }}
                    </h1>


                    <p>
                        <i class="bi bi-card-text me-2"></i>
                        <strong>Descrizione</strong>
                    </p>

                    <p class="text-secondary">
                        {{ $movie->description }}
                    </p>



                    <hr>


                    <div class="row">


                        <div class="col-md-6">

                            <p>
                                <i class="bi bi-clock me-2"></i>
                                <strong>Durata:</strong>
                                {{ $movie->duration }} minuti
                            </p>


                            <p>
                                <i class="bi bi-calendar me-2"></i>
                                <strong>Anno:</strong>
                                {{ $movie->release_year }}
                            </p>

                        </div>



                        <div class="col-md-6">

                            <p>
                                <i class="bi bi-tags me-2"></i>
                                <strong>Genere:</strong>
                                {{ $movie->genre->name }}
                            </p>


                            <p>
                                <i class="bi bi-person-video3 me-2"></i>
                                <strong>Regista:</strong>
                                {{ $movie->director->name }}
                            </p>

                        </div>


                    </div>


                    <hr>



                    {{-- Bottoni --}}

                    <div class="d-flex gap-3">


                        <a href="{{ route('movies.edit', $movie->id) }}"
                           class="btn btn-edit">

                            <i class="bi bi-pencil-square me-2"></i>
                            Modifica

                        </a>



                        <form action="{{ route('movies.destroy', $movie->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')


                            <button 
                                class="btn btn-danger"
                                onclick="return confirm('Eliminare questo film?')">

                                <i class="bi bi-trash me-2"></i>
                                Elimina

                            </button>


                        </form>


                    </div>



                </div>


            </div>


        </div>


    </div>

</div>


@endsection