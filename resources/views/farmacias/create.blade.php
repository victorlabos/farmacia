<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Farmacia</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Nova farmacia</h1>

            <form method="POST" action="{{ route('farmacias.store') }}">
             @csrf

             <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>

            <div class="mb-3">
                <label>Idade</label>
                <input type="text" name="idade" class="form-control">
            </div>

            <div class="mb-3">
                <label>Cpf</label>
                <input type="text" name="cpf" class="form-control">
            </div>

            <div class="mb-3">
                <label>Sexo</label>
                <select name="sexo" class="form-control">
                    <option value="M">MACHO</option>
                    <option value="F">FEMEA</option>
                </select>
            </div>


            <div class="mb-3">
                <label>Altura</label>
                <input type="decimal" name="altura" class="form-control">
            </div>

            <div class="mb-3">
                <label>Peso</label>
                <input type="decimal" name="peso" class="form-control">
            </div>

            <div>
                <input type="submit" value="Salvar farmacia" class="btn btn-primary">
            </div>
