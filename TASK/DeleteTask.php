<?php 
include("./DataBase/Db.php");

//validacion
if (isset($_GET["id"])) {
    $id = $_GET['id'];

    //insersion
    $query = "DELETE FROM Task WHERE Id = $id;";
    $resultado = mysqli_query($conn,$query);

    if (!$resultado) {
        die("query fallo");
    }
    
    $_SESSION['Message'] = "Tarea Eliminada Correctamente";
    $_SESSION['MessageType'] = 'danger';
    header('Location: Index.php');
}
