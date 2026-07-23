@extends('layouts.layoutDefault')

@section('content')

<div class="container">


    <div class="form-card shadow-lg">


        <h1 class="fw-bold mb-2">

            <i class="bi bi-pencil-square me-2"></i>

            Modifica Film

        </h1>


        <p class="text-secondary mb-4">
            Modifica le informazioni del film
        </p>




        <form action="{{ route('movies.update', $movie->id) }}"
              method="POST"
              enctype="multipart/form-data">


            @csrf
            @method('PUT')



            {{-- Locandina --}}
            <div class="mb-4">


                <label class="form-label">
                    Locandina
                </label>


                <div class="d-flex align-items-center gap-4">


                    <div>

                        <img 
                            src="{{ asset('storage/' . $movie->poster) }}"
                            alt="{{ $movie->title }}"
                            class="edit-poster"
                        >

                    </div>



                    <div class="poster-upload">


                        <label class="form-label">
                            Cambia locandina
                        </label>


                        <input
                            type="file"
                            name="poster"
                            class="form-control"
                        >


                        <small class="text-secondary d-block mt-2">
                            Lascia vuoto per mantenere quella attuale
                        </small>


                    </div>


                </div>


            </div>





            {{-- Titolo / durata / anno --}}
            <div class="row">


                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Titolo
                    </label>


                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        value="{{ $movie->title }}"
                    >


                </div>




                <div class="col-md-3 mb-3">


                    <label class="form-label">
                        Durata (minuti)
                    </label>


                    <input
                        type="number"
                        name="duration"
                        class="form-control"
                        value="{{ $movie->duration }}"
                    >


                </div>




                <div class="col-md-3 mb-3">


                    <label class="form-label">
                        Anno
                    </label>


                    <input
                        type="number"
                        name="release_year"
                        class="form-control"
                        value="{{ $movie->release_year }}"
                    >


                </div>


            </div>





            {{-- Descrizione --}}
            <div class="mb-3">


                <label class="form-label">
                    Descrizione
                </label>


                <textarea
                    name="description"
                    rows="5"
                    class="form-control">{{ $movie->description }}</textarea>


            </div>





            {{-- Genere e Regista --}}
            <div class="row">


                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Genere
                    </label>


                    <select name="genre_id" class="form-select">


                        @foreach($genres as $genre)


                            <option 
                                value="{{ $genre->id }}"
                                {{ $movie->genre_id == $genre->id ? 'selected' : '' }}
                            >

                                {{ $genre->name }}

                            </option>


                        @endforeach


                    </select>


                </div>





                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Regista
                    </label>


                    <select name="director_id" class="form-select">


                        @foreach($directors as $director)


                            <option
                                value="{{ $director->id }}"
                                {{ $movie->director_id == $director->id ? 'selected' : '' }}
                            >

                                {{ $director->name }}
                                {{ $director->surname }}

                            </option>


                        @endforeach


                    </select>


                </div>


            </div>





            {{-- Bottoni --}}
            <div class="d-flex gap-3 mt-4">


                <button type="submit"
                        class="btn btn-save">


                    <i class="bi bi-check-circle me-2"></i>

                    Aggiorna Film


                </button>




                <a href="{{ route('movies.show', $movie->id) }}"
                   class="btn btn-outline-secondary">


                    Annulla


                </a>


            </div>



        </form>


    </div>


</div>


@endsection