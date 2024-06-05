<?php 

include_once("../Services/StudentsRepository.php");
include_once("../Models/Student.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student = new Student($_POST['NameStudent'], $_POST['GrupoStudent']);
}

$StudentRepositiry = new StudentRepository();
/* $dbContext->Add($student); */
$StudentRepositiry->Remove(3);