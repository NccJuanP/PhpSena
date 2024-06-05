<?php
include(__DIR__ . "/../Templates/nav.php");
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <center>
            <h2>Landing Page</h2>
        </center>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2024/01/26/10/29/homework-8533770_1280.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Subjects</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go Subjects</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://cdn.pixabay.com/photo/2024/02/28/03/55/ai-generated-8601128_1280.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <p class="card-text"></p>
                <a href="./Students/Index.php" class="btn btn-primary">Go Students</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="https://img.freepik.com/fotos-premium/arte-vectorial-sobre-estudio-educacion-escuela_975572-4110.jpg?w=740" alt="">
            <div class="card-body">
                <h5 class="card-title">Qualifications</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go Qualifications</a>
            </div>
        </div>
    </div>
</div>
<?php
include("../Templates/Footer.php");
