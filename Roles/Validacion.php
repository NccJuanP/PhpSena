<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("bfv2kdcjllxqqdgnyepd-mysql.services.clever-cloud.com","us2q7mwcrptzmv3f","t0Qk8KhPjNm56ZgRKTw8","bfv2kdcjllxqqdgnyepd");
$consulta = "SELECT * FROM Usuarios where Usuario='$usuario' and Contrasenia='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$row = $resultado->fetch_assoc();
echo$row['IdCargo'] == "1";
if ($row['IdCargo'] == "1") { //administrador

    header("location: Admin/Admin.php");
}

else if ($row['IdCargo'] == 2) { //cliente 
    header("location: Client/Client.php");
} else {

?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php }
mysqli_free_result($resultado);
mysqli_close($conexion);
?>