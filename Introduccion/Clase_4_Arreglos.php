<?php
    //indtroduccion a arrays

    /* $dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes');

    echo "hoy es dia $dias[4] y ayer fue $dias[3]";
    echo "<br>";
    echo "<br>"; */

    //array de carros

    $carros = array("BMW", "NISSAN", "TOYOTA");
    echo $carros[2];

    echo "<br>";
    echo "<br>"; 
    
    echo count($carros);
    echo "<br>"; 
    echo "<br>"; 

    // bucle para arrays

    for ($i=0; $i < count($carros); $i++) { 
        echo $carros[$i];
        echo "<br>";
    }

    echo "<br>";

    //frutas

    $frutas = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for($i = 1; $i <= 4; $i++) {
            $frutas[$i] = $_POST["fruta$i"];
        }

        foreach($frutas as $item){
            echo $item;
            echo "<br>";
        }
    }

    //arrays asociativos

    $edades = array("Peter" => 30, "Juan" => 21, "Diego" => 40);
    echo "Me llamo Peter y tengo  $edades[Peter]";
    echo "<br>";
   

    // Bucle a traves de asociacion

    foreach ($edades as $x => $x_value) {
        echo "nombre = $x edad =  $x_value";
        echo "<br>";
    }

    //array matriz

    $array = [
        [1, 2],
        [3, 4]
    ];

    foreach($array as list($a , $b)){
        echo "A: $a";
        echo "<br>";
        echo "B: $b";
        echo "<br>";

    }
?>