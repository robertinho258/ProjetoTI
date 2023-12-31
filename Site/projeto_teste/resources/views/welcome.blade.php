<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Filmes de 2023</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            padding: 0;
        }

        header .login-registro {
            color: #fff;
            text-decoration: none;
        }

        footer {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de Filmes de 2023</h1>
        <div class="login-registro">
            <a href="{{ route('register') }}" class="btn btn-primary">Registrar</a>
            <a href="{{ route('login') }}" class="btn btn-success">Login</a>
        </div>
    </header>
    
    <!-- Conteúdo da sua página aqui -->

    <footer>
        Rodapé da Minha Página
    </footer>
</body>
</html>
