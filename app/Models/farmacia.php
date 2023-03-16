<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    protected $table = "farmacias";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'idade',
        'cpf',
        'sexo',
        'altura',
        'peso',
        'foto'
    ];
}
