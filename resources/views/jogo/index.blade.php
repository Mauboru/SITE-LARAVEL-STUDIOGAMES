@extends('home')

@section('conteudo')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">ID</th>
                        <th class="py-2">Nome do Jogo</th>
                        <th class="py-2">Descrição</th>
                        <th class="py-2">Categoria</th>
                        <th class="py-2">Horas Jogadas</th>
                        <th class="py-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $jogo)
                    <tr class="">
                        <td class="py-2">{{ $jogo->id }}</td>
                        <td class="py-2">{{ $jogo->nome }}</td>
                        <td class="py-2">{{ $jogo->descricao }}</td>
                        <td class="py-2">{{ $jogo->categoria->name}}</td>
                        <td class="py-2">{{ $jogo->qtdHorasJogadas }}</td>
                        <td class="py-2 flex justify-content-center space-x-2 m-3">
                        <!-- Botão Ver -->
                        <form action="{{ route('jogo.show', $jogo->id) }}" method="GET">
                            <button type="submit" class="btn btn-primary px-3 py-2 mr-2">🔍︎</button>
                        </form>
                        
                        <!-- Botão Editar -->
                        <form action="{{ route('jogo.edit', $jogo->id) }}" method="GET">
                            <button type="submit" class="btn btn-dark px-3 py-2 mr-2"> Editar</button>
                        </form>
                        
                        <!-- Botão Excluir -->
                        <form action="{{ route('jogo.destroy', $jogo->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger px-3 py-2 mr-2">Excluir</button>
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