<?php
include("../../../Controllers/SubjectsController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>
    <form method="post" action="../../../Controllers/SubjectsController.php">
  <div class="mb-3">
    <label for="NameSubject" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameSubject" name="NameSubject">
  </div>
  <div class="mb-3">
      <label class="form-label" for="Description">Description</label>
    <input type="text" class="form-control" id="Description" name="Description">
  </div>
  <button type="submit" class="btn btn-primary" name="Create">Submit</button>
</form>
<?php
include("../../Templates/Footer.php"); 
?>