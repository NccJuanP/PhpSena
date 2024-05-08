<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Poema</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Enlace a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Poema Completo</h1>
    <hr>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php
            if (isset($_GET['titulo'])) {
                $titulo = urldecode($_GET['titulo']);
                $poema_path = "poemas/" . $titulo . ".txt";
                if (file_exists($poema_path)) {
                    $contenido = file_get_contents($poema_path);
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $titulo; ?></h5>
                            <p class="card-text"><?php echo nl2br($contenido); ?></p>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "<p class='text-danger'>El poema no existe.</p>";
                }
            } else {
                echo "<p class='text-danger'>El título del poema no se ha especificado.</p>";
            }
            ?>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS (opcional, solo si usas funcionalidades de Bootstrap que requieran JavaScript) -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
