@extends('plantilla')
@section('titulo1')
{{ 'Recuperar' }}
@section('seccion')
    <div class="container">
        <div class="form-container">
          <h2 class="mb-4">Recuperación de Contraseña</h2>
          <div class="mb-4">
            <p>Proporciona un correo electrónico para enviarte un código de recuperación</p>
          </div>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" required>
            </div>
          </form>
          <a href="index.html"><button type="submit" class="btn btn-primary">Recuperar Contraseña</button></a>
        </div>
    </div>
@stop
