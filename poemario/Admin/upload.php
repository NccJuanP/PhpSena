<?php
if (isset($_POST['submit'])) {
    // Información del archivo subido
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    // Verifica si hubo un error al subir el archivo
    if ($fileError === 0) {
        // Límite de tamaño del archivo en bytes (por ejemplo, 5MB)
        $fileSizeLimit = 5 * 1024 * 1024;

        if ($fileSize <= $fileSizeLimit) {
            // Lee el contenido del archivo en una variable
            $fileContent = file_get_contents($fileTmpName);

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

            // Prepara la consulta SQL para insertar la imagen
            $stmt = $conn->prepare("INSERT INTO Poemas (Nombre, Tipo, Datos, Contenido) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $titulo, $fileType, $fileContent, $contenido);

            if ($stmt->execute()) {
                echo "La imagen se ha subido y guardado en la base de datos exitosamente.";
            } else {
                echo "Error al guardar la imagen: " . $stmt->error;
            }

            // Cierra la conexión
            $stmt->close();
            $conn->close();
        } else {
            echo "El tamaño del archivo excede el límite permitido.";
        }
    } else {
        echo "Hubo un error al subir el archivo.";
    }
} else {
    echo "No se ha enviado ningún archivo.";
}
?>
