<?php
// sera el valor de nuestra BD
$host = "bjbfxzxoj6prrw4gw8ug-mysql.services.clever-cloud.com";
$basededatos = "bjbfxzxoj6prrw4gw8ug";
$usuariodb = "uo5qu0i6zgffpsya";
$clavedb = "gtI0s8KkZGMS7j7z1BtK";

//Lista de Tablas
$tabla_db1 = "propietario";
// tabla de usuarios
//error_reporting(0); //No me muestra errores
$conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);
if ($conexion->connect_errno) {
echo "Nuestro sitio experimenta fallos....";
exit();
}