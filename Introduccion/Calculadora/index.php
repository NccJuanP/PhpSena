<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculadora</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <img src="https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_1280.jpg" class="rounded mx-auto d-block" alt="..." style="height: 200px;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <form action="backEnd.php" method="post">
                    <div class="mb-3">
                        <label for="Num1" class="form-label">Numero 1</label>
                        <input type="text" class="form-control" id="Num1" name="Num1">
                    </div>
                    <div class="mb-3">
                        <label for="Num2" class="form-label">Numero 2</label>
                        <input type="text" class="form-control" id="Num2" name="Num2">
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operaciones" id="Suma" value="1">
                        <label class="form-check-label" for="Suma">Suma</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operaciones" id="Resta" value="2">
                        <label class="form-check-label" for="Resta">Resta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operaciones" id="Multi" value="3">
                        <label class="form-check-label" for="Multi">Multiplicacion</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="operaciones" id="Divi" value="4">
                        <label class="form-check-label" for="Divi">Division</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>