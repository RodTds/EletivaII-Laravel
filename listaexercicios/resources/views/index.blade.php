<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Exercícios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .menu a {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Menu de Exercícios</h1>

    <div class="menu">
        @for ($i = 1; $i <= 20; $i++)
            <a href="{{ route('exercicio' . $i) }}">Exercício {{ $i }}</a>
        @endfor
    </div>

</body>
</html>
