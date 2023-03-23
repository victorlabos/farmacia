<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    public function index()
    {
    $farmacias = Farmacia::all();

    return view('farmacia.index', compact('farmacias'));
    }

    public function create()

    {

        return view ('farmacia.create');

    }

    public function store(Request $request)
{
        $farmacia = new Farmacia();

        $farmacia->nome = $request->nome;
        $farmacia->idade = $request->idade;
        $farmacia->cpf = $request->cpf;
        $farmacia->sexo = $request->sexo;
        $farmacia->altura = $request->altura;
        $farmacia->peso = $request->peso;

        $farmacia->save();

        return redirect()->route('farmacias.index');
}

    public function show(Farmacia $farmacia)
{
        return view('farmacias.show', compact('farmacia'));
}

}
