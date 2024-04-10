@extends('plantillaforms')
@section('seccion')
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="mb-4">Comentarios</h2>
            <form method="POST" action="{{ route('comentario.store') }}">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Comentario</label>
                    <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Comentario" required>
                </div>
                <button class="btn btn-block btn-outline-primary mt-3">
                 <span class="fas fa-user-plus"></span>Enviar
                </button>
            </form>
        </div>
    </div>
@stop