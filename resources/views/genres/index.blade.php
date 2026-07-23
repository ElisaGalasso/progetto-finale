@extends('layouts.layoutDefault')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


    <h1 class="fw-bold">

        <i class="bi bi-tags me-2 icon-red"></i>

        Lista Generi

    </h1>




    <a href="{{ route('genres.create') }}"
       class="btn btn-add-movie">


        <i class="bi bi-plus-circle me-2"></i>

        Nuovo Genere


    </a>


</div>





<div class="row justify-content-center">


    @foreach($genres as $genre)


        <div class="col-md-4 mb-3">


            <div class="genre-card shadow-sm">


                <div class="d-flex align-items-center justify-content-between">


                    <div>


                        <h4 class="mb-0">

                            <i class="bi bi-film me-2 icon-red"></i>

                            {{ $genre->name }}

                        </h4>


                    </div>




                    <div class="d-flex gap-2">


                        <a href="{{ route('genres.edit', $genre->id) }}"
                           class="btn btn-sm btn-edit">


                            <i class="bi bi-pencil"></i>


                        </a>





                        <form action="{{ route('genres.destroy', $genre->id) }}"
                              method="POST">


                            @csrf
                            @method('DELETE')



                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Sei sicuro di voler eliminare questo genere?')">


                                <i class="bi bi-trash"></i>


                            </button>


                        </form>


                    </div>



                </div>


            </div>


        </div>


    @endforeach


</div>


@endsection