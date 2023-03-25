<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    public function index()
    {
        $farmacias = Farmacia::all();

        return view('farmacias.index', compact('farmacias'));
    }

    public function create()

    {

        return view ('farmacias.create');

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


        public function edit(Farmacia $farmacia)
        {

            return view('farmacias.edit', compact('farmacia'));
        }


        public function update(Request $requisicao, Farmacia $farmacia)
        {

            $farmacia->update($requisicao->all());


            return redirect()->route('farmacias.show', $farmacia->id);
        }


        public function destroy(Farmacia $farmacia)
        {
            $farmacia->delete();

            return redirect()->route('farmacias.index');
        }
    }
