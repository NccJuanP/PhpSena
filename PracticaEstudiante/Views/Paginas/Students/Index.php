<?php
include("../../../Controllers/StudentController.php");
include(__DIR__ . "/../../Templates/nav.php");
?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
            <center><h2>Students Page</h2></center>

    </div>
    <div class="col-md-4"></div>
</div>
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
                    echo "<td scoped='row'>". $student->getId()."</td>";
                    echo "<td>". $student->getName()."</td>";
                    echo "<td>". $student->getGrupo()."</td>";
                    echo '<td>' . '<div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Details</button>
                    <button type="button" class="btn btn-warning">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </div>'."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<?php
include("../../Templates/Footer.php");
