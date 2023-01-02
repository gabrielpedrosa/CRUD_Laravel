<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
        <nav class="navbar navbar-dark bg-dark px-5 mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD LARAVEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown_users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown_users">
                                <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="#">Listar</a></li>
                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        <div class="container">
            <div class="d-flex flex-row w-100">
                <div class="d-flex justify-content-center w-100">
                    <img src="{{asset('img/laravel-placeholder.png')}}" alt="Logo Laravel" width="300" height="300">
                </div>
                <div class="d-flex flex-column w-100 justify-content-center">
                    <h2 class="d-flex justify-content-center text-success m-3">LOGIN</h2>
                    <form method="post" action="{{ route('login'); }}" class="d-flex flex-column">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label text-success">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-success">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>