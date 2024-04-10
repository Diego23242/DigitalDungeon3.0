@php
$configData = Helper::appClasses();
@endphp
@extends('layouts/layouts_categorias/layout_categorias')
@extends('plantillajuegos')
@section('seccion')
<style>
    .card {
        height: 500px; /* Altura fija para todas las tarjetas */
        transition: transform 0.3s ease;
    }
    
    .card-img-top {
        height: 90%; /* Altura del 60% del contenedor para la imagen */
        object-fit: cover; /* Escalar la imagen para que cubra el contenedor */
    }
    .card:hover {
  transform: translateY(-5px);
}
    </style>
@stop