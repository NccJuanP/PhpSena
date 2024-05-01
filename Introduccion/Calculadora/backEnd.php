<?php

function suma($numero1, $numero2)
{
    return $numero1 + $numero2;
}

function resta($numero1, $numero2)
{
    return $numero1 - $numero2;
}

function multiplicacion($numero1, $numero2)
{
    return $numero1 * $numero2;
}

function dividir($numero1, $numero2)
{
    return $numero1 / $numero2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operaciones = $_POST["operaciones"];
    $numero1 = $_POST["Num1"];
    $numero2 = $_POST["Num2"];
    $respuesta = "";

    if ($numero1 != null && $numero2 != null) {
        switch ($operaciones) {
            case "1":
                $respuesta =  "el resultado es: " . suma($numero1, $numero2);
                break;

            case "2":
                $respuesta =  "el resultado es: " . resta($numero1, $numero2);
                break;

            case "3":
                $respuesta =  "el resultado es: " . multiplicacion($numero1, $numero2);
                break;

            case "4":
                if ($numero1 == 0 || $numero2 == 0) {
                    $respuesta = "no se puede dividir entre cero";
                } else {
                    $respuesta =  "el resultado es: " . dividir($numero1, $numero2);
                }
                break;

            default:
                break;
        }
        echo $respuesta;
    } else {
        echo "introduzca valores";
    }
}
