<?php

if(isset($_POST['btn1']))
{
include("abrir_conexion.php");
$doc = $_POST['doc'];
$nombre = $_POST['nombre'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
mysqli_query($conexion, "INSERT INTO propietario (doc, nombre, direccion, telefono) values ('$doc', '$nombre', '$dir', '$tel')");
include("cerrar_conexion.php");
echo "Se insertaron Correctamente";
}
mysqli_close($conexion);