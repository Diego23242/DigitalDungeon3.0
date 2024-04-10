<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Css/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('assets/img/DigitalDungeon.ico')}}" type="image/x-icon">
    @yield('titulo1')
</head>
<style>
    .border-blue-royal {
    border-color: #4169E1; /* Azul rey */
    background-color:#4169E1;
}
    /* Estilo personalizado para el contorno con movimiento */
    .card-border {
        border: 5px solid;
        border-image-slice: 1;
        animation: borderAnimation 5s infinite alternate linear;
    }
    /* Definición de la animación */
    @keyframes borderAnimation {
        0% { border-color: rgb(255, 0, 0); }
        25% { border-color: rgb(0, 255, 0); }
        50% { border-color: rgb(98, 0, 255); }
        75% { border-color: rgb(255, 255, 0); }
        100% { border-color: rgb(255, 0, 255); }
    }
    .card-img-top{
        border: 5px;
    }
    .card {
        height: 700px; /* Altura fija para todas las tarjetas */
    }
    .card-body{
        background-color: rgb(235, 235, 235);
    }
</style>
<body style="background-color: #ffffff; color: white;">

    <!-- Include Bootstrap JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
