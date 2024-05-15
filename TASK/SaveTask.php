<?php
include("./DataBase/Db.php");

//validacion
if (isset($_POST["GuardarTask"])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];


    if (isset($_SESSION['id'])) {
        //actualizacion
        $query = "UPDATE Task SET Descripcion = '$descripcion', Titulo = '$titulo' WHERE Id = $_SESSION[id];";
        $_SESSION['Message'] = "Tarea Actualizada Correctamente";
        $_SESSION['MessageType'] = 'primary';

        //formateamos las sesiones
        $_SESSION['id'] = null;
        $_SESSION['titulo'] = null;
        $_SESSION['descripcion'] = null;
    } else {
        //insersion
        $query = "INSERT INTO Task(Titulo,Descripcion) VALUES('$titulo','$descripcion');";
        $_SESSION['Message'] = "Tarea Creada Correctamente";
        $_SESSION['MessageType'] = 'success';
    }
    $resultado = mysqli_query($conn, $query);

    if (!$resultado) {
        die("query fallo");
    }

    header('Location: Index.php');
}
