<?php
if (isset($_GET['id'])) {
    // Obtén el ID de la imagen a mostrar
    $id = intval($_GET['id']);

    // Conecta a la base de datos
    $servername = "buwgngzlztxhxj9bn5gr-mysql.services.clever-cloud.com";
            $username = "ujpgzt3w73alrn4i";
            $password = "KUpVlgvUtJ8U9bXpmAKf";
            $dbname = "buwgngzlztxhxj9bn5gr";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para obtener la imagen
    $stmt = $conn->prepare("SELECT Tipo, Datos FROM Poemas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($tipo, $datos);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        // Muestra la imagen
        echo $datos;
    } else {
        echo "Imagen no encontrada.";
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "No se ha especificado ningún ID de imagen.";
}
?>
