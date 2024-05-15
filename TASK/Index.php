<?php
include("DataBase/Db.php");
include("Include/header.html");
?>
<div class="container">
    <div class="row py-3">
        <?php if (isset($_SESSION['Message'])) { ?>
            <div class="alert alert-<?php echo $_SESSION["MessageType"] ?>" role="alert">
            <?php echo $_SESSION["Message"] ?>
            </div>
        <?php } ?>
        <div class="col-md-4">
            <form action="SaveTask.php" method="post">
                <div class="card card-body">
                    <div class="form-group">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="nota madrugar" autofocus value="<?php if(isset($_SESSION['titulo'])){echo $_SESSION['titulo'];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="2"><?php if(isset($_SESSION['descripcion'])){echo $_SESSION['descripcion'];} ?></textarea>
                    </div>
                    <div class="d-grid gad-2 py-2">

                        <button type="submit" class="btn btn-success" name="GuardarTask">Guardar <svg xmlns="http://www.w3.org/2000/svg" style="width: 5%;" viewBox="0 0 448 512" class="ms-1">
                                <path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
                            </svg></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha creacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Query = "SELECT * FROM Task";
                    $ResultadoTabla = mysqli_query($conn, $Query);
                    while ($Row = mysqli_fetch_array($ResultadoTabla)) {
                    ?>
                        <tr>
                            <td><?php echo $Row['Titulo'] ?></td>
                            <td><?php echo $Row['Descripcion'] ?></td>
                            <td><?php echo $Row['FechaCreacion'] ?></td>
                            <td>
                                <a href="EditTask.php?id=<?php echo $Row['Id'] ?>" class="btn btn-primary">Editar</a>

                                <a href="DeleteTask.php?id=<?php echo $Row['Id'] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include("Include/footer.html");
?>