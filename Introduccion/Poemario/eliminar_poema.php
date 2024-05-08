<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo_eliminar = $_POST["titulo_eliminar"];

    // Eliminar el archivo de texto del poema seleccionado
    unlink("poemas/$titulo_eliminar.txt");

    // Redireccionar de vuelta a la página principal
    header("Location: index.php");
    exit;
}
?>
