@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layouts_categorias/layout_consolas')
@extends('plantillajuegos')
@section('seccion')
<style>
    <style>
    .game-card,.game-card-descuento {
        height: 600px; /* Altura fija para todas las tarjetas */
    }
    .card {
        height: 500px; /* Altura fija para todas las tarjetas */
        transition: transform 0.3s ease;
    }
    .card:hover {
  transform: translateY(-5px);
    }
    .card-img-top {
        height: 80%; /* Altura del 60% del contenedor para la imagen */
        object-fit: fill; /* Escalar la imagen para que cubra el contenedor */
    }
</style>
    </style>
    
@stop