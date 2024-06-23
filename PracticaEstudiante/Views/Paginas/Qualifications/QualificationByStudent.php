<?php
include("../../../Controllers/QualificationsController.php");
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
<a href="../Index.php" class="btn btn-success">Regresar</a>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Score</th>
                <th>IdStudent</th>
                <th>IdSubject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Qualification = new QualificationsController();
            $Qualifications = $Qualification->GetByStudentId($_GET["Id"]);
            foreach ($Qualifications as $Qualification) {
                echo "<tr>";
                echo "<td scoped='row'>" . $Qualification->getId() . "</td>";
                echo "<td>" . $Qualification->getScore() . "</td>";
                echo "<td>" . $Qualification->getIdStudent() . "</td>";
                echo "<td>" . $Qualification->getIdSubject() . "</td>";
                echo '<td>' . '<div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-primary" href="Details.php?id='. $Qualification->getId().'">Details</a>
                    <a type="button" class="btn btn-warning" href="Edit.php?id='. $Qualification->getId().'">Update</a>
                    <form method="post" action="../../../Controllers/QualificationsController.php">
                    <input type="hidden" name="Id" value="'. $Qualification->getId().'">
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
