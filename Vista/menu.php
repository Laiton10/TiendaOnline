<?php
require "../Controlador/PeticionesClienteInicio.php";
?>
    <html>
    <body>
    <header><h1>Menú</h1></header>
    <ul>
        <p><b>Menú carrito:</b></p>
        <li><a href="AnadirProductoAlCarrito.php">Añadir producto al carrito</a></li>
        <li><a href="Carrito.php">Mostrar carrito</a></li>
    </ul>
    <ul>
        <p><b>Menu BD:</b></p>
        <li><a href="AnadirProductoBD.php">Añadir producto</a></li>
        <li><a href="EliminarProductoBD.php">Eliminar producto</a></li>
        <li><a href="MostrarProductosBD.php">Mostrar productos</a></li>
        <li><a href="ActualizarProductoBD.php">Editar producto</a></li>
    </ul>

    <form action="../Controlador/PeticionesClienteCierre.php" method="post">
        <button type="submit" value="cerrar" name="cerrar">Cerrar Sesión</button>
    </form>

</body>
</html>
