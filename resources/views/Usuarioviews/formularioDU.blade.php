<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>
<body>
    <h2>Eliminar Usuario</h2>
    <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')

        <label for="ID_USUARIO">ID del Usuario:</label><br>
        <input type="text" id="ID_USUARIO" name="ID_USUARIO"><br>

        <label for="USUARIO_MODIFICACION">Usuario de Modificación:</label><br>
        <input type="text" id="USUARIO_MODIFICACION" name="USUARIO_MODIFICACION"><br>

        <button type="button" onclick="submitDeleteForm()">Eliminar</button>
    </form>

    <script>
        function submitDeleteForm() {
            var id = document.getElementById('ID_USUARIO').value;
            var form = document.getElementById('deleteForm');
            form.action = '/usuarios/del/' + id;
            form.submit();
        }
    </script>
</body>
</html>
