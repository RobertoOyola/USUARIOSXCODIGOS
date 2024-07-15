<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Codigo</title>
</head>
<body>
    <h2>Eliminar Codigo</h2>
    <form id="deleteForm" method="POST">
        @csrf
        @method('DELETE')

        <label for="ID_CODIGO">ID del Codigo:</label><br>
        <input type="text" id="ID_CODIGO" name="ID_CODIGO"><br>

        <label for="USUARIO_MODIFICACION">Usuario de Modificación:</label><br>
        <input type="text" id="USUARIO_MODIFICACION" name="USUARIO_MODIFICACION"><br>

        <button type="button" onclick="submitDeleteForm()">Eliminar</button>
    </form>

    <script>
        function submitDeleteForm() {
            var id = document.getElementById('ID_CODIGO').value;
            var form = document.getElementById('deleteForm');
            form.action = '/codigos/del/' + id;
            form.submit();
        }
    </script>
</body>
</html>
