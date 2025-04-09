<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        a:hover {
            background-color: #218838;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }

        .action-links a {
            background-color: #007bff;
        }

        .action-links a.delete {
            background-color: #dc3545;
        }

        .action-links a.delete:hover {
            background-color: #c82333;
        }

        .action-links a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Lista de Clientes</h1>

    @if(count($clientes) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Origen</th>
                    <th>Data Nascimento</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->name }}</td>
                        <td>{{ $cliente->tel }}</td>
                        <td>{{ $cliente->ori }}</td>
                        <td>{{ $cliente->date }}</td>
                        <td>{{ $cliente->obs }}</td>
                        <td class="action-links">
                            <a href="{{ url('/editar-cliente/'.$cliente->id) }}">Editar</a>
                            <a href="{{ url('/excluir-cliente/'.$cliente->id) }}" class="delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="text-align: center; color: #777;">Não há clientes cadastrados.</p>
    @endif
</body>
</html>
