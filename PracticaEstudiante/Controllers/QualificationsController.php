<?php 

include_once(__DIR__ . '/../Services/Qualifications/QualificationsRepository.php');

class QualificationsController{
    public function Index(){
        $QualificationsRepository = new QualificationsRepository();
        $qualification = $QualificationsRepository->GetAll();
        return $qualification;
    }
    public function GetById($Id){
        $QualificationsRepository = new QualificationsRepository();
        $qualification = $QualificationsRepository->GetById($Id);
        return $qualification;
    }
    public function Add($Qualification){
        $QualificationsRepository = new QualificationsRepository();
        $QualificationsRepository->Add($Qualification);
    }
    public function Remove($Id){
        $QualificationsRepository = new QualificationsRepository();
        $QualificationsRepository->Remove($Id);
    }
    public function Update($Qualification, $Id){
        $QualificationsRepository = new QualificationsRepository();
        $QualificationsRepository->Update($Qualification, $Id);
    }
}

//Simulacion de las rutas
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['Create'])){
        $qualification = new Qualification();
        $qualification->setScore($_POST['Score']);
        $qualification->setIdStudent($_POST['IdStudent']);
        $qualification->setIdSubject($_POST['IdSubject']);
        $QualificationsController = new QualificationsController();
        $QualificationsController->Add($qualification);
        header("Location: ../Views/Paginas/Qualifications/Index.php");
    }

    else if(isset($_POST['Update'])){
        $qualification = new Qualification();
        $qualification->setScore($_POST['Score']);
        $qualification->setIdStudent($_POST['IdStudent']);
        $qualification->setIdSubject($_POST['IdSubject']);
        $id =  $_POST['Id'];
        $QualificationsController = new QualificationsController();
        $QualificationsController->Update($qualification, $id);
        header("Location: ../Views/Paginas/Qualifications/Index.php");
    }

    else if(isset($_POST['Delete'])){
        $id = ($_POST['Id']);
        $QualificationsController = new QualificationsController();
        $QualificationsController->Remove($id);
        header("Location: ../Views/Paginas/Qualifications/Index.php");
    }

    else if(isset($_POST['GetById'])){
        $id = ($_POST['IdStudent']);
        $QualificationsController = new QualificationsController();
        $qualification = $QualificationsController->GetById($id);
    }

    else if(isset($_POST['GetAll'])){
        $QualificationsController = new QualificationsController();
        $qualifications = $QualificationsController->Index();
    }
}