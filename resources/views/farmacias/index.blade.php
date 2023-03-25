<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Farmacias</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Farmacias</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('farmacias.create') }}">Novo Farmacia</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>nome</th>
                    <th>idade</th>
                    <th>cpf</th>
                    <th>sexo</th>
                    <th>altura</th>
                    <th>peso</th>

                </tr>

                @foreach ($farmacias as $farmacia)
                    <tr>
                        <td>{{ $farmacia->nome }}</td>
                        <td>{{ $farmacia->idade }}</td>
                        <td>{{ $farmacia->cpf }}</td>
                        <td>{{ $farmacia->sexo }}</td>
                        <td>{{ $farmacia->altura }}</td>
                        <td>{{ $farmacia->peso }}</td>
                    </tr>
                    <td>
                    <a class="link" href="{{ route('farmacias.show', $farmacia->id) }}">
                        Ver
                    </a>
                    </td>
                @endforeach
            </table>
        </div>


    </body>
</html>
