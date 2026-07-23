<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Movie Manager</title>


    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>


<body>


<div class="auth-page">


    {{-- Logo --}}
    <div class="text-center mb-4">


        <i class="bi bi-film auth-icon"></i>


        <h1 class="fw-bold text-white mt-2">
            Movie Manager
        </h1>


    </div>





    {{-- Card --}}
    <div class="auth-card shadow-lg">


        {{ $slot }}


    </div>



</div>


</body>

</html>