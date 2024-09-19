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


<style>
    /* App CSS file */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px;
}

.table {
    border-collapse: collapse;
    width: 100%;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table th,
.table td {
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
}

.table th {
    background-color: #f8f9fa;
    color: #212529;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.btn {
    border-radius: 0.25rem;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    border: 1px solid transparent;
    cursor: pointer;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #212529;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 0.25rem;
    padding: 0.75rem 1.25rem;
}

</style>