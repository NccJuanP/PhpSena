<?php
include("../../../Controllers/StudentController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <center>
            <h2>Qualifications Page</h2>
        </center>

    </div>
    <div class="col-md-4"></div>
</div>

<!--buton para agregar nuevo estudiante-->
<a class="btn btn-primary" href="Create.php" role="button">Add Qualification</a>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th>Group</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $student = new StudentController();
            $students = $student->Index();
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td scoped='row'>" . $student->getId() . "</td>";
                echo "<td>" . $student->getName() . "</td>";
                echo "<td>" . $student->getGrupo() . "</td>";
                echo '<td>' . '<div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-primary" href="Details.php?id='. $student->getId().'">Details</a>
                    <a type="button" class="btn btn-warning" href="Edit.php?id='. $student->getId().'">Update</a>
                    <form method="post" action="../../../Controllers/StudentController.php">
                    <input type="hidden" name="Id" value="'. $student->getId().'">
                    <button type="submit" class="btn btn-danger" name="Delete">Delete</button>
                    </form>
                  </div>' . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include("../../Templates/Footer.php"); 
?>
