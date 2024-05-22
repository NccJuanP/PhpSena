<?php

    $servidor = "buwgngzlztxhxj9bn5gr-mysql.services.clever-cloud.com";
    $usuario = "ujpgzt3w73alrn4i";
    $password = "KUpVlgvUtJ8U9bXpmAKf";
    $db = "buwgngzlztxhxj9bn5gr";
    $conn = new mysqli($servidor, $usuario, $password, $db);


    if($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }


?>
