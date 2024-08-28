<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar cita</title>
    <link rel="icon" type="image/png" href="{{ asset('imagenes/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('Consultas/Css/formularios.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('Consultas/Css/logos.css') }}"> --}}
</head>

<body>
    {{-- <div class="logo-dasboard">
        <img src="{{ asset('imagenes/logo_clinica.png') }}" alt="">
    </div> --}}

    @include('nav')

    <x-app-layout>

        <div class="agendar_cita">
            @include('agendar_cita')
        </div>
        <div class="py-12">


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                    <br><br>
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
