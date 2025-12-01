<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.css') }}">
</head>
<body>
    @include('layout')

    <div class="container mt-4">
        <h1>Catálogo</h1>
        <p>Vivamus eget pharetra nulla. Morbi mattis rhoncus ante et vulputate. Sed vitae tellus sed nisl imperdiet pulvinar.
        Pellentesque vel massa congue, vehicula sem sed, sollicitudin enim.</p>

        @if(!isset($produtos) || $produtos->isEmpty())
            <p>Nenhum jogo encontrado.</p>
        @else
            <div class="row">
                @foreach($produtos as $jogo)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $jogo->titulo ?? $jogo->name ?? 'Sem título' }}</h5>
                                <p class="card-text">{{ $jogo->descricao ?? '' }}</p>
                                <p class="text-muted">ID: {{ $jogo->id }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
