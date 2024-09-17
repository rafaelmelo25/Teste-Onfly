<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public function index()
    {
        $despesas = Despesa::all();
        return view('despesas.index', compact('despesas'));
    }

    public function create()
    {
        return view('despesas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'data' => 'required|date',
        ]);

        Despesa::create($request->all());

        return redirect()->route('despesas.index')->with('success', 'Despesa criada com sucesso.');
    }

    public function edit(Despesa $despesa)
    {
        return view('despesas.edit', compact('despesa'));
    }

    public function update(Request $request, Despesa $despesa)
    {
        $request->validate([
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'data' => 'required|date',
        ]);

        $despesa->update($request->all());

        return redirect()->route('despesas.index')->with('success', 'Despesa atualizada com sucesso.');
    }

    public function destroy(Despesa $despesa)
    {
        $despesa->delete();

        return redirect()->route('despesas.index')->with('success', 'Despesa excluída com sucesso.');
    }
}
