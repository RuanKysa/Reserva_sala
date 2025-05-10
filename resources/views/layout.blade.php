<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo Laravel</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #2e7d32;
      color: #fff;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    header h2 {
      margin-bottom: 0.5rem;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 1rem;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      padding: 2rem;
      max-width: 900px;
      margin: auto;
      background-color: #fff;
      margin-top: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    main h1 {
      color: #2e7d32;
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    main p {
      font-size: 1.1rem;
      margin-bottom: 0.75rem;
    }

    main p strong {
      color: #1b5e20;
    }

    main a {
      display: inline-block;
      margin-top: 1rem;
      padding: 0.6rem 1.2rem;
      background-color: #2e7d32;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    main a:hover {
      background-color: #1b5e20;
      transform: scale(1.02);
    }

    @media (max-width: 600px) {
      nav a {
        display: block;
        margin: 0.5rem 0;
      }

      main {
        padding: 1rem;
        margin-top: 1rem;
      }
    }  
  </style>
</head>
<body>
  <header>
    <h2>Meu Sistema Laravel</h2>
    <nav>
      <a href="{{ url('/') }}">Início</a> |
      <a href="{{ url('/produtos') }}">Produtos</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>
