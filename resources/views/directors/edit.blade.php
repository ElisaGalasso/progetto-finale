@extends('layouts.layoutDefault')

@section('content')


<div class="container">


    <div class="form-card shadow-lg">


        <h1 class="fw-bold mb-2">

            <i class="bi bi-person-video3 me-2 icon-red"></i>

            Modifica Regista

        </h1>


        <p class="text-secondary mb-4">
            Modifica le informazioni del regista
        </p>




        <form action="{{ route('directors.update', $director->id) }}"
              method="POST"
              enctype="multipart/form-data">


            @csrf
            @method('PUT')




            {{-- Foto --}}
            <div class="mb-4">


                <label class="form-label">
                    Foto regista
                </label>



                <div class="d-flex align-items-center gap-4">



                    <div>

                        <img
                            src="{{ asset('storage/' . $director->photo) }}"
                            alt="{{ $director->name }} {{ $director->surname }}"
                            class="edit-director-photo"
                        >

                    </div>




                    <div class="poster-upload">


                        <label class="form-label">
                            Cambia foto
                        </label>


                        <input
                            type="file"
                            name="photo"
                            class="form-control"
                        >


                        <small class="text-secondary d-block mt-2">
                            Lascia vuoto per mantenere la foto attuale
                        </small>


                    </div>


                </div>


            </div>





            {{-- Nome e cognome --}}
            <div class="row">


                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Nome
                    </label>


                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ $director->name }}"
                    >


                </div>





                <div class="col-md-6 mb-3">


                    <label class="form-label">
                        Cognome
                    </label>


                    <input
                        type="text"
                        name="surname"
                        class="form-control"
                        value="{{ $director->surname }}"
                    >


                </div>


            </div>





            {{-- Data nascita --}}
            <div class="mb-4">


                <label class="form-label">
                    Data di nascita
                </label>


                <input
                    type="date"
                    name="birth_date"
                    class="form-control"
                    value="{{ $director->birth_date }}"
                >


            </div>





            {{-- Bottoni --}}
            <div class="d-flex gap-3">


                <button type="submit"
                        class="btn btn-save">


                    <i class="bi bi-check-circle me-2"></i>

                    Aggiorna Regista


                </button>





                <a href="{{ route('directors.show', $director->id) }}"
                   class="btn btn-outline-secondary">


                    Annulla


                </a>


            </div>



        </form>



    </div>


</div>


@endsection