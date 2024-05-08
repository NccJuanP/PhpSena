<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];

    // Guardar el poema en un archivo de texto
    file_put_contents("poemas/$titulo.txt", $contenido);

    // Redireccionar de vuelta a la página principal
    header("Location: index.php");
    exit;
}
?>
