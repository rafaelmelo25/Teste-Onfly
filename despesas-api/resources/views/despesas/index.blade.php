@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Lista de Despesas</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('despesas.create') }}" class="btn btn-primary mb-3">Adicionar Despesa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($despesas as $despesa)
            <tr>
                <td>{{ $despesa->id }}</td>
                <td>{{ $despesa->descricao }}</td>
                <td>{{ $despesa->valor }}</td>
                <td>{{ $despesa->data }}</td>
                <td>
                    <a href="{{ route('despesas.edit', $despesa->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('despesas.destroy', $despesa->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
