!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CV – {{ $nome }}</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 30px; }
        header { text-align: center; border-bottom: 2px solid #2980b9; padding-bottom: 10px; }
        h1 { font-size: 32px; color: #2980b9; }
        .section { margin-top: 25px; }
        .section h2 { color: #2980b9; }
    </style>
</head>
<body>
    <header>
        <h1>{{ $nome }}</h1>
        <p>{{ $contato }}</p>
    </header>

    <button onclick="toggleResumo()">Mostrar/Ocultar Resumo</button>
    <div id="resumoBox" class="section">
        <h2>Perfil Profissional</h2>
        <p>{{ $resumo }}</p>
    </div>

    <div class="section">
        <h2>Experiência</h2>
        @foreach($experiencias as $e)
            <div>
                <strong>{{ $e['cargo'] }}</strong> – {{ $e['empresa'] }}<br>
                <small>{{ $e['periodo'] }}</small>
                <p>{{ $e['descricao'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="section">
        <h2>Formação</h2>
        @foreach($educacoes as $ed)
            <div>
                {{ $ed['curso'] }} – {{ $ed['instituicao'] }} ({{ $ed['periodo'] }})
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/curriculo.js') }}"></script>
</body>
</html>
