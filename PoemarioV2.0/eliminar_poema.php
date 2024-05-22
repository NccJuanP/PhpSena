<?php

session_start();
$usuario = $_SESSION['usuario'];

if($usuario == null){
    header("Location: login.php");
}



include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del poema a eliminar desde el formulario
    $id = $_POST['titulo_eliminar'];

    // Preparar la consulta SQL para eliminar el poema
    $sql = "DELETE FROM `poemas` WHERE `id` = ?";

    // Usar una declaración preparada para ejecutar la consulta de forma segura
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Enlazar el parámetro
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Ejecutar la declaración
        if (mysqli_stmt_execute($stmt)) {
            // Redirigir a la página principal después de eliminar el poema
            header("Location: index.php");
            exit;
        } else {
            echo "Error al eliminar el poema: " . mysqli_error($conn);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la declaración: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
