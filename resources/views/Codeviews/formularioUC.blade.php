<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Codigo</title>
</head>
<body>
    <h2>Formulario de Actualización de Codigo</h2>
    <form action="/codigos/upd" method="POST">
        @csrf

        <label for="ID_CODIGO">ID Codigo:</label><br>
        <input type="text" id="ID_CODIGO" name="ID_CODIGO"><br>

        <label for="DESCRIPCION">Descripcion:</label><br>
        <input type="text" id="DESCRIPCION" name="DESCRIPCION"><br>

        <label for="USUARIO_MODIFICACION">Id Usuario a Modificar:</label><br>
        <input type="text" id="USUARIO_MODIFICACION" name="USUARIO_MODIFICACION"><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
