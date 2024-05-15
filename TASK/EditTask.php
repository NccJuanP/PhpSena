<?php 
include("./DataBase/Db.php");

//validacion
if (isset($_GET["id"])) {
    $id = $_GET['id'];

    //insersion
    $query = "SELECT * FROM Task WHERE Id = $id;";
    $resultado = mysqli_query($conn,$query);

    if (!$resultado) {
        die("query fallo");
    }

    while ($Row = mysqli_fetch_array($resultado)) {
    $_SESSION['id'] = $Row['Id'];
    $_SESSION['titulo'] = $Row['Titulo'];
    $_SESSION['descripcion'] = $Row['Descripcion'];

    }
    $_SESSION['Message'] = null;
    $_SESSION['MessageType'] = null;

    header('Location: Index.php');
}
