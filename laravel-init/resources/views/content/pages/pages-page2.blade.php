@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<p>Este contenido es publico</p>
@role('admin')
<p>Solo lo va ver el rol admin</p>
@endrole
@role('escritor')
<p>Solo lo va ver el rol escritor</p>
@endrole
@endsection
