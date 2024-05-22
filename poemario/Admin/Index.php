
    <?php
    include("../Include/Header.php");
    ?><div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
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

        // Prepara la consulta SQL para obtener todas las imágenes
        $sql = "SELECT id, Nombre, Contenido FROM Poemas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imageId = 2; // Ejemplo de ID de imagen

            // Genera la URL de la imagen usando el ID
            $imageUrl = "mostrar.php?id=" . $row['id'];
                echo " <div class='col'>
                <div class='card shadow-sm'>
                <img src='$imageUrl' alt='Imagen'>
                <h1>$row[Nombre]</h1>
                  <div class='card-body'>
                    <p class='card-text'>$row[Contenido]</p>
                    <div class='d-flex justify-content-between align-items-center'>
                      <div class='btn-group'>
                        <button type='button' class='btn btn-sm btn-outline-secondary'>View</button>
                        <button type='button' class='btn btn-sm btn-outline-secondary'>Edit</button>
                      </div>
                      <small class='text-muted'>9 mins</small>
                    </div>
                  </div>
                </div>
              </div>";
            }
        } else {
            echo "<li>No se encontraron imágenes.</li>";
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
    </div>

    <?php
    include("../Include/Footer.php");
    ?>