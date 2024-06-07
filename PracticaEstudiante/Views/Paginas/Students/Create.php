<?php
include("../../../Controllers/StudentController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>
    <form method="post" action="../../../Controllers/StudentController.php">
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent">
  </div>
  <div class="mb-3">
      <label class="form-label" for="GrupoStudent">grupo</label>
    <input type="text" class="form-control" id="GrupoStudent" name="GrupoStudent">
  </div>
  <button type="submit" class="btn btn-primary" name="Create">Submit</button>
</form>
<?php
include("../../Templates/Footer.php"); 
?>