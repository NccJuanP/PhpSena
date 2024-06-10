<?php
include("../../../Controllers/SubjectsController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <center>
            <h2>Subjects Page</h2>
        </center>

    </div>
    <div class="col-md-4"></div>
</div>

<!--buton para agregar nuevo estudiante-->
<a class="btn btn-primary" href="Create.php" role="button">Add Subject</a>
<a href="../Index.php" class="btn btn-success">Regresar</a>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $Subject = new SubjectController();
            $Subjects = $Subject->Index();
            foreach ($Subjects as $Subject) {
                echo "<tr>";
                echo "<td scoped='row'>" . $Subject->getId() . "</td>";
                echo "<td>" . $Subject->getName() . "</td>";
                echo "<td>" . $Subject->getDescription() . "</td>";
                echo '<td>' . '<div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" class="btn btn-primary" href="Details.php?id='. $Subject->getId().'">Details</a>
                    <a type="button" class="btn btn-warning" href="Edit.php?id='. $Subject->getId().'">Update</a>
                    <form method="post" action="../../../Controllers/SubjectsController.php">
                    <input type="hidden" name="Id" value="'. $Subject->getId().'">
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
