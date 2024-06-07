<?php
include("../../../Controllers/SubjectsController.php");
include(__DIR__ . "/../../Templates/nav.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
$route = new SubjectController();
$subject = $route->GetById($id);
?>
    <form method="post" action="../../../Controllers/SubjectsController.php">
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Id</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent" value="<?php echo $subject->getId() ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent" value="<?php echo $subject->getName() ?>" readonly>
  </div>
  <div class="mb-3">
      <label class="form-label" for="GrupoStudent">grupo</label>
    <input type="text" class="form-control" id="GrupoStudent" name="GrupoStudent" value="<?php echo $subject->getDescription() ?>" readonly>
  </div>
</form>
<a type="submit" class="btn btn-primary" name="Create" href="Index.php">regresar</a>
<?php
}
include("../../Templates/Footer.php"); 
?>