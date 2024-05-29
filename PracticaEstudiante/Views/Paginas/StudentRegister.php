<?php include("../Templates/Header.html"); ?>

<div class="container">
    <div class="row">
        <br><br><br>
        <div class="col-md-12 position-relative">
            <h2 class="position-absolute top-50 start-50 translate-middle">Registro Estudiante</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="../../Controllers/StudentController.php">
                <div class="mb-3">
                    <label for="NameStudent" class="form-label">Nombre Estudiante</label>
                    <input type="text" class="form-control" id="NameStudent" name="NameStudent">
                </div>
                <div class="mb-3">
                    <label for="GrupoStudent" class="form-label">Grupo Estudiante</label>
                    <input type="text" class="form-control" id="GrupoStudent" name="GrupoStudent">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include("../Templates/Footer.php"); ?>