<?php
include("../../../Controllers/StudentController.php");
include(__DIR__ . "/../../Templates/nav.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
$route = new StudentController();
$student = $route->GetById($id);
?>
<a type="submit" class="btn btn-primary" name="a" href="Index.php">regresar</a>
    <form method="post" action="../../../Controllers/StudentController.php">
  <div class="mb-3">
    <label for="IdStudent" class="form-label">Id</label>
    <input type="text" class="form-control" id="IdStudent" name="IdStudent" value="<?php echo $student->getId() ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent" value="<?php echo $student->getName() ?>">
  </div>
  <div class="mb-3">
      <label class="form-label" for="GrupoStudent">grupo</label>
    <input type="text" class="form-control" id="GrupoStudent" name="GrupoStudent" value="<?php echo $student->getGrupo() ?>">
  </div>
<button type="submit" class="btn btn-success" name="Update">guardar</button>
</form>
<?php
}
include("../../Templates/Footer.php"); 
?>