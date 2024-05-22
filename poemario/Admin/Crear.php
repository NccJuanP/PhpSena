<?php
include("../Include/Header.php");
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="file">Selecciona una imagen:</label>
  <input type="file" name="file" id="file" required>
  <input type="submit" name="submit" value="Subir Imagen">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulo">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">contenido</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1" name="contenido"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include("Include/Footer.html");
?>