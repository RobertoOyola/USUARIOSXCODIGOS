<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    <h2>Formulario de Actualización de Usuario</h2>
    <form action="/usuarios/upd" method="POST">
        @csrf

        <label for="ID_USUARIO">ID Usuario:</label><br>
        <input type="text" id="ID_USUARIO" name="ID_USUARIO"><br>

        <label for="NOMBRES">Nombres:</label><br>
        <input type="text" id="NOMBRES" name="NOMBRES"><br>

        <label for="APELLIDOS">Apellidos:</label><br>
        <input type="text" id="APELLIDOS" name="APELLIDOS"><br>

        <label for="CONTRASENA">Contraseña:</label><br>
        <input type="text" id="CONTRASENA" name="CONTRASENA"><br>

        <label for="FECHA_NACIMIENTO">Fecha de Nacimiento:</label><br>
        <input type="date" id="FECHA_NACIMIENTO" name="FECHA_NACIMIENTO"><br>

        <label for="USUARIO_MODIFICACION">Usuario de Modificación:</label><br>
        <input type="text" id="USUARIO_MODIFICACION" name="USUARIO_MODIFICACION"><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
