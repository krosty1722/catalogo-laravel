<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear nuevo producto</h1>
    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Descripción:</label>
        <textarea name="descripcion"></textarea><br>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver al listado</a>
</body>
</html>