<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h2>Formulario de Usuario</h2>
    <form action="/usuarios/int" method="POST">
        @csrf <!-- Agrega el campo CSRF token -->

        <label for="ID_USUXCOD">ID_USUXCOD:</label><br>
        <input type="text" id="ID_USUXCOD" name="ID_USUXCOD"><br>

        <label for="NOMBRES">Nombres:</label><br>
        <input type="text" id="NOMBRES" name="NOMBRES"><br>

        <label for="APELLIDOS">Apellidos:</label><br>
        <input type="text" id="APELLIDOS" name="APELLIDOS"><br>

        <label for="FECHA_NACIMIENTO">Fecha de Nacimiento:</label><br>
        <input type="date" id="FECHA_NACIMIENTO" name="FECHA_NACIMIENTO"><br>

        <label for="USUARIO_CREACION">Usuario de Creación:</label><br>
        <input type="text" id="USUARIO_CREACION" name="USUARIO_CREACION"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
