<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Sena Poetas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Crear Poema</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="py-5 bg-light border-bottom mb-4 imagen">
        <div class="container">
            <div class="text-center mt-5  mb-5" style="margin-left: 78px;">
                <h1 class="fw-bolder">Poemario</h1>
                <p class="lead mb-0">Poemas Famosos</p>
            </div>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php //seguridad de sessiones paginacion 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if (!$varsesion) {
    header("location: Login.html");
    die();
}
?>