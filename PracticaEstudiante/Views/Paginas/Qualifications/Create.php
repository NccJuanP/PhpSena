<?php
include("../../../Controllers/QualificationsController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>
    <form method="post" action="../../../Controllers/QualificationsController.php">
  <div class="mb-3">
    <label for="Score" class="form-label">Score</label>
    <input type="text" class="form-control" id="Score" name="Score">
  </div>
  <div class="mb-3">
      <label class="form-label" for="IdStudent">IdStudent</label>
    <input type="text" class="form-control" id="IdStudent" name="IdStudent">
  </div>
  <div class="mb-3">
      <label class="form-label" for="IdSubject">IdSubject</label>
    <input type="text" class="form-control" id="IdSubject" name="IdSubject">
  </div>
  <button type="submit" class="btn btn-primary" name="Create">Submit</button>
</form>
<?php
include("../../Templates/Footer.php"); 
?>