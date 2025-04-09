<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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

        form {
            width: 50%;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[disabled] {
            background-color: #f0f0f0;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="/editar-cliente/{{ $cliente->id }}" method="POST">
        @csrf
        <!-- ID, desabilitado para não ser alterado -->
        <div class="form-group">
            <label for="lblId">ID - </label>
            <input type="text" name="id" value="{{ $cliente->id }}" disabled>
        </div>

        <!-- Nome -->
        <div class="form-group">
            <label for="lblNome">Nome - </label>
            <input type="text" name="name" value="{{ $cliente->name }}">
        </div>

        <!-- Telefone -->
        <div class="form-group">
            <label for="lblTelefone">Telefone - </label>
            <input type="text" name="tel" value="{{ $cliente->tel }}">
        </div>

        <!-- Origem -->
        <div class="form-group">
            <label for="lblOrigen">Origem - </label>
            <input type="text" name="ori" value="{{ $cliente->ori }}">
        </div>

        <!-- Data de nascimento -->
        <div class="form-group">
            <label for="lblData">Data Nascimento - </label>
            <input type="date" name="date" value="{{ $cliente->date }}">
        </div>

        <!-- Observação -->
        <div class="form-group">
            <label for="lblObservacao">Observação - </label>
            <input type="text" name="obs" value="{{ $cliente->obs }}">
        </div>

        <!-- Botão para editar -->
        <button type="submit">Editar Cliente</button>
    </form>
</body>
</html>
