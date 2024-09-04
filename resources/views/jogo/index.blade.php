@extends('templates.main', [
    "title" => "Eixos",
    "header" => "Tabelas de Eixos"
])

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">ID</th>
                        <th class="py-2">Nome do Jogo</th>
                        <th class="py-2">Descrição</th>
                        <th class="py-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $jogo)
                    <tr>
                        <td class="py-2">{{ $jogo->id }}</td>
                        <td class="py-2">{{ $jogo->nome }}</td>
                        <td class="py-2">{{ $jogo->descricao }}</td>
                        <td class="py-2 flex space-x-2">
                            <a href="{{ route('jogo.show', $jogo->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Ver</a>
                            <a href="{{ route('jogo.edit', $jogo->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Editar</a>
                            <form action="{{ route('jogo.destroy', $jogo->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection