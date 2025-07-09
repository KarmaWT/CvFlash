<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Modelos de Currículos</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0; padding: 0;
      background: #f9f9f9;
    }
    header {
      background-color: #FFCC00;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      margin: 0;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
    }
    .filtrostabs {
      display: flex;
      overflow-x: auto;
      gap: 10px;
      padding: 10px 0;
    }
    .filtrostabs a {
      flex: 0 0 auto;
      text-decoration: none;
      color: #333;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 8px 16px;
      background: #fff;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      transition: background 0.3s;
      white-space: nowrap;
    }
    .filtrostabs a:hover,
    .filtrostabs .filtro-selecionado {
      background: #007bff;
      color: #fff;
      border-color: #007bff;
    }
    .grid-modelos {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }
    .modelo {
      flex: 1 1 calc(33% - 20px);
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      text-decoration: none;
      color: inherit;
      transition: transform 0.3s;
    }
    .modelo:hover {
      transform: scale(1.02);
    }
    .modelo img {
      width: 100%;
      height: auto;
    }
    .modelo-content {
      padding: 10px;
    }
    .modelo-content h4 {
      margin: 0 0 8px;
      font-size: 18px;
    }
    .modelo-content p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }
    @media (max-width: 768px) {
      .modelo {
        flex: 1 1 calc(50% - 20px);
      }
    }
    @media (max-width: 480px) {
      .modelo {
        flex: 1 1 100%;
      }
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Modelos de Currículos</h1>
    <p>Escolha o modelo que melhor se adapta a você!</p>
  </header>

  <main>
    <section class="container">
      <h2>Tipos de Modelos</h2>
      <div class="filtrostabs">
        <a class="filtro-selecionado" data-filtro="todos"><i class="fas fa-list"></i> Todos</a>
        <a data-filtro="classico"><i class="fas fa-file-lines"></i> Clássico</a>
        <a data-filtro="moderno"><i class="fas fa-laptop-code"></i> Moderno</a>
        <a data-filtro="criativo"><i class="fas fa-lightbulb"></i> Criativo</a>
        <a data-filtro="elegante"><i class="fas fa-gem"></i> Elegante</a>
        <a data-filtro="simples"><i class="fas fa-check"></i> Simples</a>
        <a data-filtro="intermediario"><i class="fas fa-layer-group"></i> Intermediário</a>
        <a data-filtro="elaborado"><i class="fas fa-star"></i> Elaborado</a>
      </div>

      <div class="grid-modelos">
        @foreach($modelos as $modelo)
          <div class="modelo" data-categoria="{{ $modelo->categoria }}">
            <img src="{{ $modelo->imagem }}" alt="{{ $modelo->titulo }}" />
            <div class="modelo-content">
              <h4>{{ $modelo->titulo }}</h4>
              <p>{{ $modelo->descricao }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 CvFlash. Todos os direitos reservados.</p>
  </footer>

  <script>
    const filtros = document.querySelectorAll(".filtrostabs a");
    const modelos = document.querySelectorAll(".modelo");

    filtros.forEach(filtro => {
      filtro.addEventListener("click", () => {
        filtros.forEach(f => f.classList.remove("filtro-selecionado"));
        filtro.classList.add("filtro-selecionado");

        const categoria = filtro.dataset.filtro;

        modelos.forEach(modelo => {
          if (categoria === "todos" || modelo.dataset.categoria === categoria) {
            modelo.style.display = "block";
          } else {
            modelo.style.display = "none";
          }
        });
      });
    });
  </script>
</body>
</html>
