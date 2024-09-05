<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<title>STUDIO GAMES</title>

<x-app-layout>
    <x-slot name="header">
        @if(request()->routeIs('jogo') || request()->routeIs('categoria'))
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    @if(request()->routeIs('jogo'))
                        <a href="{{ route('jogo.create') }}" class="btn btn-success me-2">Novo</a>
                    @elseif(request()->routeIs('categoria'))
                        @can('hasFullPermission', App\Models\Categoria::class)
                            <a href="{{ route('categoria.create') }}" class="btn btn-success me-2">Novo</a>
                        @endcan
                    @endif
                </h2>
                <div class="d-flex">
                    <a href="{{ route('report') }}" class="btn btn-danger me-2">PDF</a>
                    <a href="{{ route('graph') }}" class="btn btn-primary me-2">Gráfico</a>
                </div>
            </div>
        @endif
    </x-slot>
    @yield('conteudo')
</x-app-layout>