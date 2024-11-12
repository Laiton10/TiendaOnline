<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="inicio.css" rel="stylesheet">
</head>
<body>
    <header><h1>Iniciar Sesión</h1></header>
    <div class="container">
        <form action="../Controlador/PeticionesClienteInicio.php" method="post">
            <input type="text" name="nickname" placeholder="Nickname"><br><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <p style="color: red">
                <?php
                if(isset($_REQUEST["aviso"])){
                    echo $_REQUEST["aviso"];
                    //var_dump($_SESSION); // muestra el valor de la sesion para depuracion
                }
                ?>
            </p>

            <button type="submit">Iniciar Sesión</button><br>

            <p>Si aun no está registrado regístrese <a href="registroCliente.php">aquí</a></p>
        </form>
    </div>
</body>
</html>