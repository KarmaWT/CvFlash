!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo - {{ $nome }}</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; margin: 20px; }
        h1 { font-size: 24px; }
        section { margin-top: 15px; }
        ul { padding-left: 20px; }
    </style>
</head>
<body>
    <h1>{{ $nome }}</h1>
    <p>{{ $contato }}</p>
    <button id="baixarCurriculo">Baixar Currículo (PDF)</button>

    <section id="resumoBox">
        <h2>Resumo</h2>
        <p>{{ $resumo }}</p>
    </section>

    <section>
        <h2>Experiência</h2>
        <ul>
            @foreach($experiencias as $e)
                <li><strong>{{ $e['cargo'] }}</strong> – {{ $e['empresa'] }} ({{ $e['periodo'] }})<br>{{ $e['descricao'] }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Educação</h2>
        <ul>
            @foreach($educacoes as $ed)
                <li>{{ $ed['curso'] }} – {{ $ed['instituicao'] }} ({{ $ed['periodo'] }})</li>
            @endforeach
        </ul>
    </section>

    <script src="{{ asset('js/curriculo.js') }}"></script>
</body>
</html>
