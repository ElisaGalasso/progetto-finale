@extends('layouts.layoutDefault')

@section('content')


<div class="container">


    <div class="form-card shadow-lg">



        <div class="mb-4">


            <h1 class="fw-bold">

                <i class="bi bi-person-video3 me-2 icon-red"></i>

                Nuovo Regista

            </h1>


            <p class="text-secondary">
                Inserisci i dati del nuovo regista
            </p>


        </div>





        <form action="{{ route('directors.store') }}"
              method="POST"
              enctype="multipart/form-data">


            @csrf




            <div class="row">



                {{-- Nome --}}
                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Nome
                    </label>


                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Nome regista"
                    >


                </div>





                {{-- Cognome --}}
                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Cognome
                    </label>


                    <input
                        type="text"
                        name="surname"
                        class="form-control"
                        placeholder="Cognome regista"
                    >


                </div>


            </div>





            {{-- Data nascita --}}
            <div class="mb-3">


                <label class="form-label">
                    Data di nascita
                </label>


                <input
                    type="date"
                    name="birth_date"
                    class="form-control"
                >


            </div>





            {{-- Foto --}}
            <div class="mb-4">


                <label class="form-label">
                    Foto regista
                </label>


                <input
                    type="file"
                    name="photo"
                    class="form-control"
                >


            </div>





            <button type="submit"
                    class="btn btn-save">


                <i class="bi bi-check-circle me-2"></i>

                Salva Regista


            </button>



        </form>



    </div>


</div>


@endsection