<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="numero1" class="form-label">Numero 1</label>
                                <input type="text" class="form-control" id="numero1" aria-describedby="input1" name="numero1">
                                <div id="input1" class="form-text">Ingrese el primer numero</div>
                            </div>
                            <div class="mb-3">
                                <label for="numero2" class="form-label">Numero 2</label>
                                <input type="text" class="form-control" id="numero2" aria-describedby="input2" name="numero2">
                                <div id="input2" class="form-text">Ingrese el segundo numero</div>
                            </div>
                            <select name="operaciones" id="operaciones" class="form-select">
                                <option value="suma">suma</option>
                                <option value="resta">resta</option>
                                <option value="multiplicar">multiplicar</option>
                                <option value="dividir">dividir</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $operaciones = $_POST["operaciones"];
                            $numero1 = $_POST["numero1"];
                            $numero2 = $_POST["numero2"];

                            if ($operaciones == "suma") {
                                $resultado = $numero1 + $numero2;
                            } else if ($operaciones == "resta") {
                                $resultado = $numero1 - $numero2;
                            } else if ($operaciones == "multiplicar") {
                                $resultado = $numero1 * $numero2;
                            } else if ($operaciones == "dividir") {
                                $resultado = $numero1 / $numero2;
                            } else {
                                echo "No interacctue con el codigo";
                            }
                            echo"El resultado es $resultado";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>