<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <header><h1>Iniciar Sesión</h1></header>
        <form action="../Controlador/PeticionesClienteInicio.php" method="post">
            <input type="text" name="nickname" placeholder="Nickname"><br><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <p style="color: red"><?php echo $_REQUEST["aviso"]?></p>

            <button type="submit">Iniciar Sesión</button>
        </form>
</body>
</html>