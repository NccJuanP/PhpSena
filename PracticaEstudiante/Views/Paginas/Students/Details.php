<?php
include("../../../Controllers/StudentController.php");
include(__DIR__ . "/../../Templates/nav.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
$route = new StudentController();
$student = $route->GetById($id);
?>
    <form method="post" action="../../../Controllers/StudentController.php">
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Id</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent" value="<?php echo $student->getId() ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="NameStudent" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="NameStudent" name="NameStudent" value="<?php echo $student->getName() ?>" readonly>
  </div>
  <div class="mb-3">
      <label class="form-label" for="GrupoStudent">grupo</label>
    <input type="text" class="form-control" id="GrupoStudent" name="GrupoStudent" value="<?php echo $student->getGrupo() ?>" readonly>
  </div>
</form>
<a type="submit" class="btn btn-primary" name="Create" href="Index.php">regresar</a>

<table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Names</th>
                <th>Qualifications</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //echo strval($student->getNotas());
            foreach ($student->getNotas() as $notas) {
                echo "<tr>";
                echo "<td>" . $notas->Id. "</td>";
                echo "<td>" . $notas->Name. "</td>";
                echo "<td>" . $notas->Score. "</td>";
                echo '<td>'. '<div class="btn-group" role="group" aria-label="Basic example">
                <a type="submit" class="btn btn-primary" name="Create" href="../Qualifications/QualificationByStudent.php?Id='. $student->getId() .'">view</a>
                </div>'. '</td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}
include("../../Templates/Footer.php"); 
?>