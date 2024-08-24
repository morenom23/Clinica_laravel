<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar cita</title>
    <link rel="stylesheet" href="{{ asset('Consultas/Css/formularios.css') }}">
</head>

<body>

    <center>
        <h1>En este espacio agenda tu cita</h1>
    </center>

    <div class="contenedor_form">
        <form action="{{ route('consulta.store') }}" method="POST">

            @csrf

            <div class="inputs">
                <label for="">Nombre</label>
                <input type="text" placeholder="Ingrese el nombre" name="nombre">
            </div>

            <div class="inputs">
                <label for="">Cedula</label>
                <input type="number" placeholder="Ingrese su documento" name="cedula">
            </div>

            <div class="inputs">
                <label for="">Telefono</label>
                <input type="text" placeholder="Ingrese su telefono" name="telefono">
            </div>

            <div class="inputs">
                <label for="">Correo</label>
                <input type="email" placeholder="Ingrese su email" name="correo">
            </div>

            <div class="inputs">
                <label for="">Tipo consulta</label>
                <select name="tipo_consulta">
                    <option value="">Seleccione</option>
                    <option value="Odontologia">Odontologia</option>
                    <option value="Medicina General">Medicina General</option>
                    <option value="Pediatría">Pediatría</option>
                    <option value="Laboratorio">Laboratorio</option>
                    <option value="Ginecología">Ginecología</option>
                </select>
            </div>

            <div class="inputs">
                <label for="">Seleccione una fecha</label>
                <input type="date" name="fecha_consulta">
            </div>

            <div class="inputs">
                <label for="">Medico asignado</label>
                <select name="medico_asignado">
                    <option value="">Seleccione</option>
                    <option value="Daniel Jaramillo">Daniel Jaramillo</option>
                    <option value="Julieth Alzate">Julieth Alzate</option>
                    <option value="Merly Carechimba">Merly Carechimba</option>
                    <option value="Ezequiel Moreno">Ezequiel Moreno</option>
                </select>
            </div>

            <div class="boton">
                <input type="submit" value="Agendar" class="">
            </div>

        </form>

        <div class="cont_imagen">
            <img src="http://127.0.0.1:8000/imagenes/clinicaimg.png">
        </div>
    </div>


    @include('sweetalert::alert')

</body>

</html>
