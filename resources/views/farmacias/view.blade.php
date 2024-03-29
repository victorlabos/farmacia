<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Farmacia #{{ $farmacia->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $farmacia->nome }} - {{ $farmacia->idade }}</h1>

            <h3>{{ $farmacia->cpf }} anos</h3>

            @if($farmacia->sexo == 'F')
                <h2>Femea</h2>
            @elseif($farmacia->sexo == 'M')
                <h2>Macho</h2>

            <h3>Pelos {{ $farmacia>altura }}</h3>

            <p>
                {{ $farmacia->peso }}
            </p>

            <a class="btn btn-light" href="{{ route('farmacia.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('farmacia.edit', $farmacia->id) }}">Editar</a>

            <form method="POST" action="{{ route('farmacia.destroy', $farmacia->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Farmacia" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
