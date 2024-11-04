<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <header><h1>Registro del cliente</h1></header>
    <form action="../Controlador/ControladorPeticionesCliente.php" method="post">
        <label for="id">ID: <input type="number" name="id" id="id"></label><span style="color: red"><?php echo $_REQUEST["avisoID"]?></span><br><br>
        <label for="nombre">Nombre: <input type="text" name="nombre" id="nombre"></label><?php echo $_REQUEST["avisoNombre"]?><br><br>
        <label for="apellido">Apellido: <input type="text" name="apellido" id="apellido"></label><br><br>
        <label for="nickname">Nickname: <input type="text" name="nickname" id="nickname"></label><?php echo $_REQUEST["avisoNickname"]?><br><br>
        <label for="password">Password: <input type="password" name="password" id="password"></label><?php echo $_REQUEST["avisoPassword"]?><br><br>
        <label for="telefono">Telefono: <input type="number" name="telefono" id="telefono"></label><?php echo $_REQUEST["avisoTelefono"]?><br><br>
        <label for="domicilio">Domicilio: <input type="text" name="domicilio" id="domicilio"></label><br><br>

        <button type="submit">Enviar datos</button>
        <button type="reset">Borrar datos</button>
    </form>
</body>
</html>