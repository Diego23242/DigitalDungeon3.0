@extends('plantillaforms')
@section('seccion')
    <div class="container mt-5">
        <div class="form-container">
          <h2 class="mb-4">Inicio de sesión</h2>
          <form  >
            @csrf
            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"  required>
            </div>
            <div class="mb-3">
              <label for="psw" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="psw" name="psw" placeholder="Contraseña"  required>
            </div>
            <button type="submit" class="btn btn-block btn-outline-primary mt-3">Iniciar sesión</button>
          </form><br>
          <a href="recuperar.html"><button type="submit" class="btn btn-primary">Recuperar Contraseña</button></a>
        </div>
    </div>
    
    <br>
@stop
