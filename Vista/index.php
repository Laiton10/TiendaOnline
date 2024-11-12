<?php
require_once "../Modelo/DTOCliente.php";
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
</head>
<body>
    <?php
        if(isset($_SESSION["cliente"])){
            echo "<p>Bienvenido " . $_SESSION["cliente"]->getNombre() . "</p>";
        }else{
            echo "<p><a href='iniciarSesion.php'>Iniciar sesión</a></p>";
        }
    ?>
    <header><h1>TIENDA ONLINE</h1></header>
    <hr>
    <nav>
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="Carrito.php">Carrito</a></li>
        </ul>
    </nav>

    <footer>------------- Tienda Online -------------</footer>
</body>
</html>
