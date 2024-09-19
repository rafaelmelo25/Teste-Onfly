<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Despesas') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Botão para adicionar nova despesa -->
                <div class="flex justify-end mb-4">
                    <a href="{{ route('despesas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Adicionar Nova Despesa
                    </a>
                </div>

                <!-- Tabela de despesas -->
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2">Descrição</th>
                            <th class="py-2">Valor</th>
                            <th class="py-2">Data</th>
                            <th class="py-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($despesas as $despesa)
                            <tr>
                                <td class="border px-4 py-2">{{ $despesa->descricao }}</td>
                                <td class="border px-4 py-2">{{ $despesa->valor }}</td>
                                <td class="border px-4 py-2">{{ $despesa->data }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('despesas.edit', $despesa->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                        Editar
                                    </a>
                                    <form action="{{ route('despesas.destroy', $despesa->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="return confirm('Tem certeza que deseja excluir esta despesa?');">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Paginação -->
                <div class="mt-4">
                    {{ $despesas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
