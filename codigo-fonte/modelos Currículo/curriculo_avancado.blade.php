<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Criativo – {{ $nome }}</title>
    <style>
        body { display: flex; font-family: 'Roboto', sans-serif; margin: 0; }
        aside { width: 30%; background: #37474F; color: white; padding: 30px; }
        main { width: 70%; padding: 30px; }
        .section h2 { border-bottom: 2px solid #B0BEC5; color: #37474F; }
    </style>
</head>
<body>
    <aside>
        <h2>{{ $nome }}</h2>
        <p>{{ $email }}<br>{{ $telefone }}<br>{{ $cidade }}</p>
    </aside>
    <main>
        <button onclick="scrollToSection('experiencia')">Ver Experiência</button>

        <div class="section" id="experiencia">
            <h2>Experiência</h2>
            @foreach($experiencias as $e)
                <div>
                    <strong>{{ $e['cargo'] }}</strong> – {{ $e['empresa'] }} ({{ $e['periodo'] }})<br>
                    <p>{{ $e['descricao'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="section">
            <h2>Educação</h2>
            @foreach($educacoes as $ed)
                <p>{{ $ed['curso'] }} – {{ $ed['instituicao'] }} ({{ $ed['periodo'] }})</p>
            @endforeach
        </div>
    </main>

    <script src="{{ asset('js/curriculo.js') }}"></script>
</body>
</html>
