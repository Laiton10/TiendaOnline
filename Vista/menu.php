<?php
require "../Controlador/PeticionesClienteInicio.php";

$datosSerializados = serialize($_SESSION["cliente"]);
$obj = unserialize($datosSerializados);
echo "<p class='bienvenido'> Bienvenido " . $obj->getNombre() . "</p> <br>";
?>
    <html>
    <link rel="stylesheet" href="paginas.css">
    <body>
    <header><h1>Tienda Online</h1></header>
    <hr>
    <nav>
        <ul>
            <li><a href='index.php'>Página Principal</a></li>
            <li><a href='Carrito.php'>Carrito</a></li>
        </ul>
    </nav>
        <div class="navMenu">
    <ul>
        <div class="container-menu">
            <div class="menu">
                <p>Menú carrito:</p>
                <ul>
                    <li><a href="AnadirProductoAlCarrito.php">Añadir producto al carrito</a></li>
                    <li><a href="Carrito.php">Mostrar carrito</a></li>
                </ul>
            </div>
            <div class="menu">
                <p>Menú BD:</p>
                <ul>
                    <li><a href="AnadirProductoBD.php">Añadir producto</a></li>
                    <li><a href="EliminarProductoBD.php">Eliminar producto</a></li>
                    <li><a href="MostrarProductosBD.php">Mostrar productos</a></li>
                    <li><a href="ActualizarProductoBD.php">Editar producto</a></li>
                </ul>
            </div>
        </div>
    </ul>
        </div>

    <main>
        <form action="../Controlador/PeticionesClienteCierre.php" method="post">
        <button type="submit" value="cerrar" name="cerrar">Cerrar Sesión</button>
    </form>
    </main>

    <footer>------------- Tienda Online -------------</footer>
</body>
</html>
