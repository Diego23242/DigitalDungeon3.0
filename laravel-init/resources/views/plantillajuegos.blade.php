<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/accion.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('Img/DigitalDungeon.ico') }}" type="image/x-icon">
   
</head>
<style>
    .border-blue-royal {
    border-color: #4169E1; /* Azul rey */
    background-color:#4169E1;
}
    .game-card, .game-card-descuento {
  height: 600px;
}
.card-text, .card-title,.title{
  color: #000000;
}
    </style>
<body style="background-color: #ffffff; color: white;">
    <!-- Fin de la barra de naveg-->
    @yield('seccion')
    
    <!-- Include Bootstrap JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
