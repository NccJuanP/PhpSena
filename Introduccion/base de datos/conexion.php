
<?php
$servidor ="bjbfxzxoj6prrw4gw8ug-mysql.services.clever-cloud.com";
$usuario = "uo5qu0i6zgffpsya";
$password = "gtI0s8KkZGMS7j7z1BtK";
$db ="bjbfxzxoj6prrw4gw8ug";
$conexion = new mysqli($servidor, $usuario, $password, $db);
if($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>