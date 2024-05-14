<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnP121kFfwwEAa8hDDdjZ1pLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap- theme.min.css"
        integrity="sha384-
FLW2N011MqjakBkx31/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" cross origin="anonymous">
</head>

<body>
    </div>
    <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center>
                <h1>PROPIETARIO</h1>
            </center>
            <form name="frm" id="frm" action="" method="POST">
                <div class="form-group">
                    <label for="doc">Documento</label>
                    <input type="text" name="doc" class="form-control" id="doc">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre </label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="dir">Direccion </label>
                    <input type="text" name="dir" class="form-control" id="dir">
                </div>
                <div class="form-group">
                    <label for="tel">Telefono </label>
                    <input type="text" name="tel" class="form-control" id="tel">
                </div>
                <center>
                    <input type="submit" value="Enviar" class="btn btn-success" name="btn1" onclick="registro();">
                    <input type="submit" value="Consultar" class="btn btn-info" name="btn2" onclick="consulta();">
                </center>
            </form>

            <?php
    if (isset($_POST['btn1'])) {
        echo "Se insertaron Correctamente";
    }
    if (isset($_POST['btn2'])) {
        include ("abrir_conexion.php");
    
    $doc = $_POST['doc'];

    //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
    if ($doc == "") {
        echo "Digita un documento por favor. (Ej: 123)";
    } else {
        $resultados = mysqli_query($conexion, "SELECT * FROM propietario WHERE doc = $doc");
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo "<table width=\"100%\" border=\"1\">
                    <tr>
                    <td><b><center>Documento</center></b></td>
                    <td><b><center>Nombre</center></b></td>
                    <td><b><center>Direccion</center></b></td> 
                    <td><b><center>Telefono</center></b></td>
                    </tr>
                    <tr>
                    <td>" . $consulta['doc'] . "</td>
                    <td>" . $consulta['nombre'] . "</td>
                    <td>" . $consulta['direccion'] . "</td>
                    <td>" . $consulta['telefono'] . "</td>
                    </tr>
                </table>";
        }
    }
    include ("cerrar_conexion.php");
}
    ?>

            <script>
                function registro() {
                    document.frm.action = "registro.php";
                    document.frm.submit();
                }
                function consulta() {
                }
                document.frm.action = "formulario.php";
                document.submit();
            </script>

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
                integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq50VfW37PRR3j5ELqxss1yVq0tnepnHVP9aJ7XS"
                crossorigin="anonymous"></script>
</body>

</html>