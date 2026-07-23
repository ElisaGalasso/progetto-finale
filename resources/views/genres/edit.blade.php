@extends('layouts.layoutDefault')

@section('content')


<div class="container">


    <div class="form-card shadow-lg genre-form-card">



        <div class="mb-4">


            <h1 class="fw-bold">

                <i class="bi bi-tags me-2 icon-red"></i>

                Modifica Genere

            </h1>


            <p class="text-secondary">
                Modifica il nome del genere cinematografico
            </p>


        </div>





        <form action="{{ route('genres.update', $genre->id) }}"
              method="POST">


            @csrf
            @method('PUT')





            <div class="mb-4">


                <label class="form-label">
                    Nome genere
                </label>



                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ $genre->name }}"
                >


            </div>





            <div class="d-flex gap-3">


                <button type="submit"
                        class="btn btn-save">


                    <i class="bi bi-check-circle me-2"></i>

                    Aggiorna Genere


                </button>




                <a href="{{ route('genres.index') }}"
                   class="btn btn-outline-secondary">


                    <i class="bi bi-x-circle me-2"></i>

                    Annulla


                </a>


            </div>



        </form>



    </div>


</div>


@endsection