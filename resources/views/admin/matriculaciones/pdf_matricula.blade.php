<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Matricula</title>

        <style>
            body {
                font-family: Arial, Arial, Helvetica, sans-serif
            }

            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
                border-collapse: collapse;
            }

            .table-bordered {
                border: 1px solid #000000;
            }

            .table-bordered th, 
            .table-bordered td {
                border: 1px solid #000000;
            }

            .table-bordered thead th {
                border-bottom-width: 2px; 
            }
        </style>
    </head>

    <body>
        
        <table border="0" style="font-size: 10pt;">

            <tr>
                <td style="text-align: center;">
                    <img src="{{ url($configuracion->logo) }}" alt="Logo" width="70" style="display: block; margin-bottom: 10px;"><br>
                    <b>{{ $configuracion->nombre }}</b><br>
                    {{ $configuracion->direccion }}</b><br>
                    {{ $configuracion->telefono }}</><br>
                    {{ $configuracion->email }}</><br>
                </td>

                <td style="width: 350px"></td>

                <td>
                    <img src="{{ $barcodePNG }}" style="width: 200px; height:50px; display: block; margin: 0 auto;">

                    <div style="text-align: center; font-family: monospace; margin-top: 5px;">
                        CI: {{ $matricula->estudiante->ci }}
                    </div>
                </td>
            </tr>

        </table>

        <h3 style="text-align: center">
            <b>
                <u>MATRÍCULA DEL ESTUDIANTE</u>
            </b>
        </h3>

        <table border="0" cellpadding="3">

            <tr>
                <td><b>Gestión: </b></td>
                <td style="width: 300px">{{ $matricula->gestion->nombre; }}</td>
                <td width="200px"></td>
                <td rowspan="4" style="text-align: center;">
                    <img src="{{ url($matricula->estudiante->foto) }}" alt="Logo" width="120" style="display: block;">
                </td>
            </tr>

            <tr>
                <td><b>Nivel: </b></td>
                <td>{{ $matricula->nivel->nombre; }}</td>
            </tr>

            <tr>
                <td><b>Periodo: </b></td>
                <td>{{ $matricula->periodo->nombre; }}</td>
            </tr>

            <tr>
                <td><b>Carrera: </b></td>
                <td>{{ $matricula->carrera->nombre; }}</td>
            </tr>

        </table>

        <table border="0" style="width: 100%; margin-top: 30px; text-align: center;">
            <tr>
                <td><b>{{ $matricula->estudiante->apellidos }}</b> <br>_____________________ <br> Apellidos</td>
                <td><b>{{ $matricula->estudiante->nombres }}</b> <br>_____________________ <br> Nombres</td>
                <td><b>{{ $matricula->estudiante->ci }}</b> <br>_____________________ <br> Cédula de Identidad</td>
            </tr>

        </table>

        <br>

        <p style="text-align: center"><b><u>MATERIAS ASIGNADAS</u></b></p>

        <table class="table table-bordered" cellpadding="4" style="width: 100%; font-size: 8pt; text-align: center;">
            <tr style="text-align: center; background-color: #F2F2F2">
                <td><b>Nro</b></td>
                <td><b>Materias</b></td>
                <td><b>Código</b></td>
                <td><b>Turno</b></td>
                <td><b>Paralelo</b></td>
            </tr>
        </table>

    </body>

</html>


