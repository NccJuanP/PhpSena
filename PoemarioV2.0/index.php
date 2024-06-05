<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sena</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<?php 

session_start();
$usuario = $_SESSION['usuario'];

if($usuario == null){
    header("Location: login.php");
}

?>

<body>
    <!--editar -->
    <!-- modal editar-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="editar.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titulo">Título del Poema:</label>
                            <select class="form-control" id="titulo_editar" name="titulo">
                                <?php
                                include "conexion.php";
                                session_start();
                                $sql = "SELECT id, titulo FROM poemas";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['titulo']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nuevo_titulo">Nuevo Título del Poema:</label>
                            <input type="text" class="form-control" id="nuevo_titulo" name="nuevo_titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="nuevo_contenido">Nuevo Contenido:</label>
                            <textarea class="form-control" id="nuevo_contenido" name="nuevo_contenido" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Editar poema</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    <!--para adactar a la pantalla -->
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sena Poetas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <form action="logout.php" method="post">
                    <li class="nav-item"><button class="btn btn-danger" aria-current="page" type="submit">Logout</button></li>
                            </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- titulo y imagen-->
    <header class="py-5 bg-light border-bottom mb-4 imagen">
        <div class="container">
            <div class="text-center mt-5  mb-5" style="margin-left: 78px;">
                <h1 class="fw-bolder">Poemario</h1>
                <p class="lead mb-0">Poemas Famosos</p>
            </div>
        </div>
    </header>
    <!-- lo que contiene las targetas y los formularios -->
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-10">
                        <!-- Blog post-->
                        <?php
                        include "conexion.php";
                        $sql = "SELECT * FROM `poemas`";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $titulo = $row['titulo'];
                            $contenido = $row['contenido'];
                            $imagen = $row['imagen'];
                            $id = $row['id'];
                        ?>
                            <!-- es lo que contiene el titulo de la targeta y el contenido-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="<?php echo htmlspecialchars($imagen); ?>" alt="Imagen del poema" /></a>
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $titulo; ?></h2>
                                    <p class="card-text"><?php echo substr($contenido, 0, 100) . "..."; ?></p>
                                    <a href="leerMas.php?titulo=<?php echo urlencode($titulo); ?>" class="btn btn-primary">Ver Poema</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Buscar</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categorias</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Romance</a></li>
                                    <li><a href="#!">Drama</a></li>
                                    <li><a href="#!">Horror</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Poetas Locales</a></li>
                                    <li><a href="#!">Poetas Famosos</a></li>
                                    <li><a href="#!">Recientes</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- es un post-->
                <?php 
                    if($_SESSION['rol'] == 1){

                    ?>
                <div class="card mb-4">
                    <div class="card-header">Ingresar Poema</div>
                    <div class="card-body">
                        <form action="agregar_poema.php" method="post">
                            <div class="form-group">
                                <label for="titulo">Imagen</label>
                                <input type="text" class="form-control" id="imagen" name="imagen" required>
                            </div>
                            <div class="form-group">
                                <label for="titulo">Título del Poema:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="form-group">
                                <label for="titulo">Autor:</label>
                                <input type="text" class="form-control" id="autor" name="autor" required>
                            </div>
                            <div class="form-group">
                                <label for="contenido">Contenido:</label>
                                <textarea class="form-control" id="contenido" name="contenido" rows="6" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar Poema</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Eliminar Poema</div>
                    <div class="card-body">
                        <form action="eliminar_poema.php" method="post">
                            <div class="form-group">
                                <label for="titulo_eliminar">Selecciona el Poema a Eliminar:</label>
                                <select class="form-control" id="titulo_eliminar" name="titulo_eliminar">
                                    <!-- Listar los nombre de poemas actuales -->
                                    <?php
                                    $sql = "SELECT * FROM poemas";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['id']}'>{$row['titulo']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger">Eliminar Poema</button>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="edit" onclick="editar()">
                                Editar Poemas
                            </button>

                        </form>
                    </div>
                </div>
                <script>
                    function editar(){
                        <?php
                            if(isset($_POST["edit"])){
                                $id = $_POST["titulo_eliminar"];
                                $sql = "SELECT * FROM poemas WHERE id = $id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $titulo = $row['titulo'];
                                $autor = $row['autor'];
                                $contenido = $row['contenido'];
                            }  ?>
                        document.getElementById("nuevo_titulo").value = "<?php echo $titulo ?>"
                        document.getElementById("nuevo_contenido").value = "<?php echo $contenido ?>"
                    }
                </script>
            <?php

                    }
            ?>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>