@extends('layouts.layoutDefault')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


    <h1 class="fw-bold">
        <i class="bi bi-person-video3 me-2 icon-red"></i>
        Lista Registi
    </h1>



    <a href="{{ route('directors.create') }}"
       class="btn btn-add-movie">

        <i class="bi bi-person-plus me-2"></i>
        Nuovo Regista

    </a>


</div>





<div class="row justify-content-center">


    @foreach($directors as $director)


        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">


            <div class="director-card h-100 shadow-sm">


                <img 
                    src="{{ asset('storage/' . $director->photo) }}"
                    class="director-photo"
                    alt="{{ $director->name }} {{ $director->surname }}"
                >



                <div class="p-3">


                    <h4 class="card-title">
                        {{ $director->name }}
                        {{ $director->surname }}
                    </h4>



                    <p class="text-muted">

                        <i class="bi bi-calendar me-2"></i>

                        {{ $director->birth_date }}

                    </p>



                    <a href="{{ route('directors.show', $director->id) }}"
                       class="btn btn-edit w-100">

                        <i class="bi bi-eye me-2"></i>
                        Dettagli

                    </a>


                </div>


            </div>


        </div>


    @endforeach


</div>


@endsection