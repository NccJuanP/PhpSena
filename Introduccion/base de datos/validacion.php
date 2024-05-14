
<?php
include('conexion.php'); //para incluir la conexion
session_start(); //para iniciar sesión y importante
$nombre = $_POST['nombre'];
$password = $_POST['password'];
echo $nombre;
echo $password;
$resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre = '$nombre' AND password = '$password'");//para consultar en la base de datos
//$resultado = $conexion->query($sql);//para ejecutar la consulta
echo $resultado->num_rows;
if ($resultado->num_rows > 0) {
echo "usuario correcto";
}else {
echo "el usuario no existe";
}

$row = $resultado->fetch_assoc();//adjuntar los datos obtenidos (fetch_assoc) buscar asociación
if( $row !== null && $row['nombre'] == $nombre && $row['password'] == $password) {
$_SESSION['nombre'] = $nombre; // para enviar la variable nombre para la pagina de inicio
header("Location: Index.php");
}else{
header("Location: login.php");
}