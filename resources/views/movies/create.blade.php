@extends('layouts.layoutDefault')

@section('content')

<div class="container">

    <div class="form-card shadow-lg">

        <div class="mb-4">

            <h1 class="fw-bold">
                <i class="bi bi-film me-2"></i>
                Nuovo Film
            </h1>

            <p class="text-secondary">
                Inserisci le informazioni del nuovo film
            </p>

        </div>


        <form action="{{ route('movies.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf


            <div class="row">


                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Titolo
                    </label>

                    <input 
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Inserisci il titolo del film"
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
                        placeholder="Es. 120"
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
                        placeholder="Es. 2024"
                    >

                </div>


            </div>



            <div class="mb-3">

                <label class="form-label">
                    Descrizione
                </label>

                <textarea 
                    name="description"
                    rows="5"
                    class="form-control"
                    placeholder="Inserisci una breve descrizione del film"
                ></textarea>

            </div>



            <div class="row">


                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Genere
                    </label>

                    <select name="genre_id" class="form-select">

                        <option selected disabled>
                            Seleziona un genere
                        </option>

                        @foreach($genres as $genre)

                            <option value="{{ $genre->id }}">
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

                        <option selected disabled>
                            Seleziona un regista
                        </option>


                        @foreach($directors as $director)

                            <option value="{{ $director->id }}">
                                {{ $director->name }} {{ $director->surname }}
                            </option>

                        @endforeach


                    </select>

                </div>


            </div>




            <div class="mb-4">

                <label class="form-label">
                    Locandina
                </label>

                <input 
                    type="file"
                    name="poster"
                    class="form-control"
                >

            </div>




            <div class="d-flex gap-3">


                <button type="submit"
                        class="btn btn-save">

                    <i class="bi bi-check-circle me-2"></i>
                    Salva Film

                </button>



                <a href="{{ route('movies.index') }}"
                   class="btn btn-outline-secondary">

                    Annulla

                </a>


            </div>


        </form>


    </div>

</div>

@endsection