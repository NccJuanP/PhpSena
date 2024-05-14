<?php
session_start(); 
$nombre = $_SESSION['nombre'];
if(isset($_SESSION['nombre'])){
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Página principal </title>
</head>
<body>
<?php echo "Bienvenid@ $nombre "; ?> <br /><br />
<a href="salir.php">Cerrar sesión</a> </body>


</html> <?php
}else{
    header('Location: login.php');
}
?>