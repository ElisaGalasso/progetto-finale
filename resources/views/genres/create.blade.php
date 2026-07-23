@extends('layouts.layoutDefault')

@section('content')


<div class="container">


    <div class="form-card shadow-lg genre-form-card">


        <div class="mb-4">


            <h1 class="fw-bold">

                <i class="bi bi-tags me-2 icon-red"></i>

                Nuovo Genere

            </h1>


            <p class="text-secondary">
                Inserisci una nuova categoria cinematografica
            </p>


        </div>





        <form action="{{ route('genres.store') }}"
              method="POST">


            @csrf





            <div class="mb-4">


                <label class="form-label">
                    Nome genere
                </label>


                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Es. Azione, Horror, Commedia..."
                >


            </div>





            <div class="d-flex gap-3">

                <button type="submit"
                        class="btn btn-save">

                    <i class="bi bi-check-circle me-2"></i>
                    Salva Genere

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