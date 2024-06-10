<?php
include("../../../Controllers/QualificationsController.php");
include(__DIR__ . "/../../Templates/nav.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
$route = new QualificationsController();
$qualification = $route->GetById($id);
?>
<a type="submit" class="btn btn-primary" name="Create" href="Index.php">regresar</a>
    <form method="post" action="../../../Controllers/QualificationsController.php">
  <div class="mb-3">
    <label for="Id" class="form-label">Id</label>
    <input type="text" class="form-control" id="Id" name="Id" value="<?php echo $qualification->getId() ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Score</label>
    <input type="text" class="form-control" id="Score" name="Score" value="<?php echo $qualification->getScore() ?>" >
  </div>
  <div class="mb-3">
      <label class="form-label" for="IdStudent">Id Student</label>
    <input type="text" class="form-control" id="IdStudent" name="IdStudent" value="<?php echo $qualification->getIdStudent() ?>" >
  </div>
  <div class="mb-3">
      <label class="form-label" for="IdSubject">Id Subject</label>
    <input type="text" class="form-control" id="IdSubject" name="IdSubject" value="<?php echo $qualification->getIdSubject() ?>" >
  </div>
  <button type="submit" class="btn btn-success" name="Update">guardar</button>
</form>
<?php
}
include("../../Templates/Footer.php"); 
?>