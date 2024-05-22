<?php


session_start();
$usuario = $_SESSION['usuario'];

if($usuario == null){
    header("Location: login.php");
}

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST["titulo"];
    $nuevo_titulo = $_POST["nuevo_titulo"];
    $nuevo_contenido = $_POST["nuevo_contenido"];

    // Preparar la consulta SQL para actualizar el poema
    $sql = "UPDATE `poemas` SET `titulo` = ?, `contenido` = ? WHERE `id` = ?";

    // Usar una declaración preparada para ejecutar la consulta de forma segura
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Enlazar los parámetros
        mysqli_stmt_bind_param($stmt, "ssi", $nuevo_titulo, $nuevo_contenido, $id);

        // Ejecutar la declaración
        if (mysqli_stmt_execute($stmt)) {
            // Redirigir a la página principal después de editar el poema
            header("Location: index.php");
            exit;
        } else {
            echo "Error al editar el poema: " . mysqli_error($conn);
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
