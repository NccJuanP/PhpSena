<?php 

include(__DIR__ . '/../Services//Subjects/SubjectsRepository.php');

class SubjectController{
    public function Index(){
        $SubjectsRepository = new SubjectsRepository();
        $Subjects = $SubjectsRepository->GetAll();
        return $Subjects;
    }
    
    public function GetById($Id){
        $SubjectsRepository = new SubjectsRepository();
        $Subject = $SubjectsRepository->GetById($Id);
        return $Subject;
    }

    public function Add($Subject){
        $SubjectsRepository = new SubjectsRepository();
        $SubjectsRepository->Add($Subject);
    }

    public function Delete($Id){
        $SubjectsRepository = new SubjectsRepository();
        $SubjectsRepository->Remove($Id);
    }

    public function Update($Subject, $Id){
        $SubjectsRepository = new SubjectsRepository();
        $SubjectsRepository->Update($Subject, $Id);
    }
}

//Simulacion de las rutas
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['Create'])){
        $Subject = new Subject();
        $Subject->setName($_POST['NameSubject']);
        $Subject->setDescription($_POST['Description']);
        $SubjectController = new SubjectController();
        $SubjectController->Add($Subject);
        header("Location: ../Views/Paginas/Subjects/Index.php");
    }

    else if(isset($_POST['Update'])){
        $Subject = new Subject();
        $Subject->setName($_POST['NameSubject']);
        $Subject->setDescription($_POST['Description']);
        $id = $_POST['Id'];
        $SubjectController = new SubjectController();
        $SubjectController->Update($Subject, $id);
        header("Location: ../Views/Paginas/Subjects/Index.php");

    }

    else if(isset($_POST['Delete'])){
        $SubjectController = new SubjectController();
        $SubjectController->Delete($_POST['Id']);
        header("Location: ../Views/Paginas/Subjects/Index.php");
    }

    else if(isset($_POST['GetById'])){
        $SubjectController = new SubjectController();
        $Subject = $SubjectController->GetById($_POST['Id']);

    }

    else if(isset($_POST['GetAll'])){
        $SubjectController = new SubjectController();
        $Subjects = $SubjectController->Index();
    }

}