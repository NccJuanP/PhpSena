<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Digite el nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Digite el apellido</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <label for="" class="form-label">Seleccione sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="M" value="Masculino">
                        <label class="form-check-label" for="M">
                            M
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="F" value="Femenino">
                        <label class="form-check-label" for="F">
                            F
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="otro" value="Otro">
                        <label class="form-check-label" for="otro">
                            Otro
                        </label>
                    </div>
                    <br>
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <?php
    class registro{
        public $name;
        public $lastname;
        public $sexo;
        public function __construct($name, $lastname, $sexo){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->sexo = $sexo;
        }
    }
    $array = array();
    $array = json_decode(file_get_contents("DB.txt"));
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST["name"];
        $LastName = $_POST["lastname"];
        $Radio = $_POST["radio"];
        $usuario = new registro ($Name, $LastName, $Radio);
        array_push( $array, $usuario);
        file_put_contents("DB.txt",json_encode($array));}
        ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Sexo</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($array as $key) {
            echo "<tr>";
            echo "<td>" . $key->name."</td>";
            echo "<td>". $key->lastname."</td>";
            echo "<td>". $key->sexo."</td>";
            echo "</tr>";

    }
    
    ?>

</body>

</html>