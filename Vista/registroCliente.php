<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="registro.css" rel="stylesheet">
</head>
<body>
    <header><h1>Registro del cliente</h1></header>
    <div class="container">
    <form action="../Controlador/PeticionesClienteRegistro.php" method="post">
            <label for="id"><input type="number" name="id" id="id" placeholder="ID"></label><br>
            <span style="color: red"><?php echo $_REQUEST["avisoID"] ?></span><br><br>

            <label for="nombre"><input type="text" name="nombre" id="nombre" placeholder="Nombre"></label><br>
            <span style="color: red"><?php echo $_REQUEST["avisoNombre"] ?></span><br><br>

            <label for="apellido"><input type="text" name="apellido" id="apellido" placeholder="Apellido"></label>
            <br><br>

            <label for="nickname"><input type="text" name="nickname" id="nickname" placeholder="Nickname"></label><br>
            <span style="color: red"><?php echo $_REQUEST["avisoNickname"] ?></span><br><br>

            <label for="password"><input type="password" name="password" id="password" placeholder="Password"></label><br>
            <span style="color: red"><?php echo $_REQUEST["avisoPassword"] ?></span><br><br>

            <label for="telefono"><input type="number" name="telefono" id="telefono" placeholder="Telefono"></label><br>
            <span style="color: red"><?php echo $_REQUEST["avisoTelefono"] ?></span><br><br>

            <label for="domicilio"><input type="text" name="domicilio" id="domicilio" placeholder="Domicilio"></label><br><br>

            <button type="submit">Enviar datos</button><br><br>
            <button type="reset">Borrar datos</button>
    </form>
    </div>
</body>
</html>