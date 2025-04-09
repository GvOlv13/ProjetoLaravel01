<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clientes</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            /* Garantir que o texto dentro da navbar fique branco */
            .navbar, .navbar-brand, .navbar-nav .nav-link {
                color: white !important;
            }

            .success-message {
                width: 220px;
                height: 100px;
                background-color: #ffffff;
                border: 1px #000000 solid;
                position: fixed;
                top: 50vh;
                left: 50vw;
                border-radius: 15px;
            }
        </style>
    </head>
    <body class="antialiased">

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary text-light p-3"> 
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
                        <a class="nav-link" href="listar-clientes">Consultar</a>
                    </div>
                    </div>
                </div>
            </nav>      
        </div>
    </div>
    <div class="p-3">
        <br>
        <h4>Cadastrar - Agendamento de Potenciais Clientes</h4>
        <br>
        <h6>Sistema Ultilizado para agendamento de serviços.</h6>
        <br>
        <div class="row">
            <form action="/cadastrar-cliente" method="POST">
                @csrf
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <input id="name" type="text" class="form-control" name="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone:</label>
                        <input id="tel" type="text" class="form-control" name="tel" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label id="ori" class="form-label">Origem:</label>
                        <select class="form-select" name="ori" required>
                            <option>Celular</option>
                            <option>Telefone Fixo</option>
                            <option>Whatsapp</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data do Contato:</label>
                        <input id="date" type="date" class="form-control" name="date" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observação:</label>
                        <textarea id="obs" class="form-control" name="obs" rows="3"></textarea>
                    </div>
            
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
       
    </div>

    @if (session('success'))
        <center>
            <div class="success-message">
                {{ session('success') }}
                <br>
                <button class="btn btn-primary" onclick="this.parentElement.style.display='none'">OK</button>
            </div>
        </center>
    @endif

    </body>
</html>
