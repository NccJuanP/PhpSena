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
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sena Poetas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4 imagen">
        <div class="container">
            <div class="text-center mt-5 mb-5" style="margin-left: 78px;">
                <h1 class="fw-bolder">Poemario</h1>
                <p class="lead mb-0">Poemas Famosos</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <h1 class="text-center">Poema Completo</h1>
        <hr>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php
                include("conexion.php");

                if (isset($_GET['titulo'])) {
                    $titulo = urldecode($_GET['titulo']);
                    $sql = "SELECT * FROM poemas WHERE titulo = ?";
                    
                    if ($stmt = mysqli_prepare($conn, $sql)) {
                        mysqli_stmt_bind_param($stmt, "s", $titulo);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        if ($row = mysqli_fetch_assoc($result)) {
                            $contenido = $row['contenido'];
                            $autor = $row['autor'];
                            $imagen = $row['imagen'];
                ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-center"><?php echo $titulo; ?></h3>
                                    <h5 class="text-center">Autor: <?php echo $autor; ?></h5>
                                    <img src="<?php echo htmlspecialchars($imagen); ?>" class="card-img-top" alt="Imagen del poema">
                                    <p class="card-text text-center"><?php echo nl2br($contenido); ?></p>
                                </div>
                            </div>
                <?php
                        } else {
                            echo "<p class='text-danger'>El poema no existe.</p>";
                        }

                        mysqli_stmt_close($stmt);
                    } else {
                        echo "<p class='text-danger'>Error en la consulta.</p>";
                    }
                } else {
                    echo "<p class='text-danger'>El título del poema no se ha especificado.</p>";
                }

                mysqli_close($conn);
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
