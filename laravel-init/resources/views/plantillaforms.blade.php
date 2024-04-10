<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Css/login.css') }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('Img/DigitalDungeon.ico') }}" type="image/x-icon">
   
</head>
<style>
  label, .mb-4{
    color:black;
  }
  .border-blue-royal {
    border-color: #4169E1; /* Azul rey */
    background-color:#4169E1;
}
  </style>
<body style="background-color: #ffffff; color: white;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{ route('inicio') }}">DigitalDungeon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('accion') }}">Acción</a>
                        <a class="dropdown-item" href="{{ route('aventura') }}">Aventura</a>
                        <a class="dropdown-item" href="{{ route('retro') }}">Retro</a>
                        <a class="dropdown-item" href="{{ route('plataformas') }}">Plataformas</a>
                        <a class="dropdown-item" href="{{ route('terror') }}">Terror</a>
                        <a class="dropdown-item" href="{{ route('estrategia') }}">Estrategia</a>
                        <a class="dropdown-item" href="{{ route('simulacion') }}">Simulación</a>
                        <a class="dropdown-item" href="{{ route('carros') }}">Carros</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a></li>
                <li class="nav-item search-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Plataformas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('xbox') }}">Xbox</a>
                            <a class="dropdown-item" href="{{ route('playstation') }}">PlayStation</a>
                        </div>
                    </li>
                    <li class="nav-item search-bar">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Accesorios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('mandos') }}">Mandos</a>
                                <a class="dropdown-item" href="{{ route('audifonos') }}">Audifonos</a>
                            </div>
                        </li>
                    <form class="form-inline" action="#" method="get">
                        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Buscar...">
                        <button class="btn btn-primary text-white my-2 my-sm-0 border-blue-royal" type="submit">Buscar</button>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a>
                        <a class="dropdown-item" href="{{ route('registros') }}">Registrarse</a>
                        <a class="dropdown-item" href="{{ route('comentarios') }}">Comentario</a>
                        <a class="dropdown-item" href="ediccion_eliminacion_usuario.html">Administrador</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="carrito.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg></a></li>
            </ul>
        </div>
    </nav>
    <br>
    <!-- Fin de la barra de naveg-->
    @yield('seccion')
    
    <!-- Include Bootstrap JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
