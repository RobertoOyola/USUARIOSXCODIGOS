<form action="/usuarios/del" method="POST">
    @csrf
    @method('DELETE')
    
    <label for="id_usuxcod">ID del Usuario:</label>
    <input type="text" id="id_usuxcod" name="id_usuxcod">
    
    <label for="usuario_modificacion">Usuario de Modificación:</label>
    <input type="text" id="usuario_modificacion" name="usuario_modificacion">
    
    <button type="submit">Eliminar Usuario</button>
</form>
