<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Clase_2.php" method="post">
        <label for="variable">ingrese un dia de la semana</label>
        <select name="valor" id="select">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miercoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sabado</option>
            <option value="7">Domingo</option>
        </select>
        <!-- <input type="text" id="variable" name="valor"> -->
        <input type="submit" value="enviar" name="btnejemplo1">
    </form>
</body>
</html>