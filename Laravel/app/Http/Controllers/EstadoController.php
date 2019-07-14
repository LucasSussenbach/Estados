<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->pesquisar != null){
            $pesquisa = $request->pesquisar;
            $estados = DB::table('estados')->where('nome_extenso', 'like', strval($pesquisa))->get();
            $total = $estados->count();
        } else {
            $estados = Estado::all();
            $total = Estado::all()->count();
        }
        return view('list-estado', compact('estados', 'total'));
    }

    public function create()
    {
        return view('include-estado');
    }

    public function store(Request $request)
    {
        $product = new Estado;
        $product->sigla = $request->sigla;
        $product->regiao = $request->regiao;
        $product->nome_extenso = $request->nome_extenso;
        $product->capital = $request->capital;

        $product->save();
        return redirect()->route('state.index')->with('message', 'Estado criado com sucesso!');
    }

    public function show(Request $request)
    {
//
    }
}