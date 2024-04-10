@extends('plantilla')
@section('titulo1')
{{ 'Edicion' }}
@section('seccion')
    <section>
        <div class="user-card">
            <h2>Nombre de Usuario</h2>
            <p>Correo electrónico: usuario@example.com</p>
            <p>Contraseña: ********</p>
            <div class="user-actions">
                <button class="edit" onclick="mostrarFormularioEdicion()">Editar</button>
                <button onclick="eliminarUsuario()">Eliminar</button>
            </div>

            <div class="edit-form" id="editForm">
                <label for="newUsername">Nuevo Nombre de Usuario:</label>
                <input type="text" id="newUsername" placeholder="Ingrese el nuevo nombre de usuario">

                <label for="newEmail">Nuevo Correo Electrónico:</label>
                <input type="email" id="newEmail" placeholder="Ingrese el nuevo correo electrónico">

                <label for="newPassword">Nueva Contraseña:</label>
                <input type="password" id="newPassword" placeholder="Ingrese la nueva contraseña">

                <button onclick="guardarCambios()">Guardar Cambios</button>
                <button onclick="cancelarEdicion()">Cancelar</button>
            </div>
        </div>

        <!-- Agregar más tarjetas de usuarios según sea necesario -->

    </section>

    <script>
        function mostrarFormularioEdicion() {
            document.getElementById('editForm').style.display = 'block';
        }

        function cancelarEdicion() {
            document.getElementById('editForm').style.display = 'none';
        }

        function guardarCambios() {
            const newUsername = document.getElementById('newUsername').value;
            const newEmail = document.getElementById('newEmail').value;
            const newPassword = document.getElementById('newPassword').value;

            if (newUsername.trim() !== "" || newEmail.trim() !== "" || newPassword.trim() !== "") {
                alert('Cambios guardados correctamente.');
                // Puedes agregar aquí la lógica para enviar los cambios al servidor.
                cancelarEdicion();
            } else {
                alert('Ingrese al menos un campo para realizar cambios.');
            }
        }

        function eliminarUsuario() {
            // Lógica para la eliminación del usuario
            alert('Usuario eliminado correctamente.');
            console.log('Eliminar usuario');
        }
    </script>
@stop