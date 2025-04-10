<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Matricula</title>
    </head>

    <body>
        
        <table border="1" style="font-size: 10pt;">

            <tr>
                <td style="text-align: center;">
                    <img src="{{ url($configuracion->logo) }}" alt="Logo" width="70" style="display: block; margin-bottom: 10px;"><br>
                    <b>{{ $configuracion->nombre }}</b><br>
                    {{ $configuracion->direccion }}</b><br>
                    {{ $configuracion->telefono }}</><br>
                    {{ $configuracion->email }}</><br>
                </td>

                <td style="width: 420px"></td>

                <td style="text-align: center;">
                    <p>Codigo de Barras</p>
                    <img src="{{ url($matricula->estudiante->foto) }}" alt="Logo" width="70" style="display: block;">
                </td>
            </tr>

        </table>

        <h3 style="text-align: center">
            <b>
                <u>MATRÍCULA DEL ESTUDIANTE</u>
            </b>
        </h3>

    </body>

</html>


