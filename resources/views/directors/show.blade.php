@extends('layouts.layoutDefault')

@section('content')


<div class="container">


    <div class="movie-detail-card shadow-lg">


        <div class="row g-0">



            {{-- Foto regista --}}
            <div class="col-md-4">


                <img
                    src="{{ asset('storage/' . $director->photo) }}"
                    class="director-detail-photo"
                    alt="{{ $director->name }} {{ $director->surname }}"
                >


            </div>




            {{-- Dettagli --}}
            <div class="col-md-8">


                <div class="p-4">


                    <h1 class="fw-bold mb-4">

                        <i class="bi bi-person-video3 me-2 icon-red"></i>

                        {{ $director->name }}
                        {{ $director->surname }}

                    </h1>




                    <div class="mb-4">


                        <h5>

                            <i class="bi bi-calendar me-2"></i>

                            Data di nascita

                        </h5>


                        <p class="text-secondary">

                            {{ $director->birth_date }}

                        </p>


                    </div>




                    <hr>




                    {{-- Azioni --}}

                    <div class="d-flex gap-3 mt-4">


                        <a href="{{ route('directors.edit', $director->id) }}"
                           class="btn btn-edit">


                            <i class="bi bi-pencil-square me-2"></i>

                            Modifica


                        </a>





                        <form action="{{ route('directors.destroy', $director->id) }}"
                              method="POST">


                            @csrf

                            @method('DELETE')



                            <button 
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Sei sicuro di voler eliminare questo regista?')">


                                <i class="bi bi-trash me-2"></i>

                                Elimina


                            </button>


                        </form>




                        <a href="{{ route('directors.index') }}"
                           class="btn btn-outline-secondary">


                            <i class="bi bi-arrow-left me-2"></i>

                            Lista registi


                        </a>


                    </div>



                </div>


            </div>



        </div>


    </div>


</div>

{{-- Film del regista --}}

<h2 class="mt-5 mb-4">

    Film diretti

</h2>



@if($director->movies->count())


<div class="row">


    @foreach($director->movies as $movie)


        <div class="col-md-4 mb-4">


            <div class="card movie-card bg-dark text-white h-100 shadow-sm">


                <img
                    src="{{ asset('storage/' . $movie->poster) }}"
                    class="card-img-top"
                    alt="{{ $movie->title }}"
                    style="height: 280px; object-fit: cover;"
                >



                <div class="card-body">


                    <h5 class="card-title">

                        {{ $movie->title }}

                    </h5>



                    <a href="{{ route('movies.show', $movie->id) }}"
                       class="btn btn-outline-light btn-sm">

                        <i class="bi bi-eye me-1"></i>

                        Dettagli

                    </a>


                </div>


            </div>


        </div>


    @endforeach


</div>



@else


<p class="text-secondary">

    Questo regista non ha ancora film associati.

</p>


@endif


@endsection