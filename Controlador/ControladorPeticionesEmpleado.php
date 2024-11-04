<?php
session_start();
if(!isset($_SESSION["nombre"])){
   $_SESSION["nombre"] = "ROLDAN";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<header>Peticiones</header>
<?php
echo $_SESSION["nombre"];
echo "<a href='../Modelo/DTOEmpleado.php'>Ir a la otra</a>"
?>
</body>
</html>

