<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Poemas</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Enlace a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Biblioteca de Poemas</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h2>Agregar Poema</h2>
            <form action="agregar_poema.php" method="post">
                <div class="form-group">
                    <label for="titulo">Título del Poema:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido:</label>
                    <textarea class="form-control" id="contenido" name="contenido" rows="6" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Poema</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Eliminar Poema</h2>
            <form action="eliminar_poema.php" method="post">
                <div class="form-group">
                    <label for="titulo_eliminar">Selecciona el Poema a Eliminar:</label>
                    <select class="form-control" id="titulo_eliminar" name="titulo_eliminar">
                        <?php
                        $poemas = glob("poemas/*.txt");
                        foreach ($poemas as $poema) {
                            $titulo = basename($poema, ".txt");
                            echo "<option value='$titulo'>$titulo</option>";    
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger">Eliminar Poema</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <h1 class="text-center">Biblioteca de Poemas</h1>
    <hr>
    <div class="row">
        <?php
        $poemas = glob("poemas/*.txt");
        foreach ($poemas as $poema) {
            $titulo = basename($poema, ".txt");
            $contenido = file_get_contents($poema);
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titulo; ?></h5>
                        <p class="card-text"><?php echo substr($contenido, 0, 100) . "..."; ?></p>
                        <a href="ver_poema.php?titulo=<?php echo urlencode($titulo); ?>" class="btn btn-primary" target="_blank">Ver Poema</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Enlace a Bootstrap JS (opcional, solo si usas funcionalidades de Bootstrap que requieran JavaScript) -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
