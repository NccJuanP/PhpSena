<?php
//seguridad de sessiones paginacion 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if (!$varsesion) {
    header("location: ../index.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> hola Cliente</h1>
    <a href="../CerrarSesion.php">Cerrar sesión</a>
</body>

</html>