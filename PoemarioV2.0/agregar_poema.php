<?php

session_start();
$usuario = $_SESSION['usuario'];

if($usuario == null){
    header("Location: login.php");
}

include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $imagen = $_POST["imagen"];
    $autor = $_POST["autor"];

    $sql ="INSERT INTO `poemas`(`imagen`, `titulo`, `autor`, `contenido`) VALUES ('$imagen','$titulo','$autor','$contenido')";
    $result = mysqli_query($conn, $sql);

    
    header("Location: index.php");
    exit;
}
?>
