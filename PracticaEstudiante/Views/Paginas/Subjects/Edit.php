<?php
include("../../../Controllers/SubjectsController.php");
include(__DIR__ . "/../../Templates/nav.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
$route = new SubjectController();
$subject = $route->GetById($id);
?>
<a type="submit" class="btn btn-primary" name="a" href="Index.php">regresar</a>
    <form method="post" action="../../../Controllers/SubjectsController.php">
  <div class="mb-3">
    <label for="Id" class="form-label">Id</label>
    <input type="text" class="form-control" id="Id" name="Id" value="<?php echo $subject->getId() ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="NameSubject" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameSubject" name="NameSubject" value="<?php echo $subject->getName() ?>">
  </div>
  <div class="mb-3">
      <label class="form-label" for="Description">grupo</label>
    <input type="text" class="form-control" id="Description" name="Description" value="<?php echo $subject->getDescription() ?>">
  </div>
<button type="submit" class="btn btn-success" name="Update">guardar</button>
</form>
<?php
}
include("../../Templates/Footer.php"); 
?>