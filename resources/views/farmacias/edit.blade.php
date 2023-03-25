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
            <h1>Edição de farmacias{{ $farmacia->id }}</h1>

            <form method="POST" action="{{ route('farmacias.update', $farmacia->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $farmacia->nome }}">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="text" name="idade" class="form-control" value="{{ $farmacia->idade }}">
                </div>

                <div class="mb-3">
                    <label>Cpf</label>
                    <input type="number" name="cpf" class="form-control" value="{{ $farmacia->cpf }}">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" {{ $farmacia->sexo == 'M' ? 'selected' : '' }}>Macho</option>
                        <option value="F" {{ $farmacia->sexo == 'F' ? 'selected' : '' }}>Femea</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Altura</label>
                    <input type="text" name="altura" class="form-control" value="{{ $farmacia->cor }}">
                </div>

                <div class="mb-3">
                    <label>Peso</label>
                    <textarea name="peso" id="" rows="5" class="form-control">{{ $farmacia->peso }}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar Farmacia" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
