<?php
include(__DIR__ . '/../Services/Students/StudentsRepository.php');


class StudentController{
    public function Index(){
        $StudentRepositiry = new StudentRepository();
        $students = $StudentRepositiry->GetAll();
        return $students;
    }
    public function GetById($Id){
        $StudentRepositiry = new StudentRepository();
        $student = $StudentRepositiry->GetById($Id);
        return $student;
    }
    public function Add($Student){
        $StudentRepositiry = new StudentRepository();
        $StudentRepositiry->Add($Student);
    }
    public function Remove($Id){
        $StudentRepositiry = new StudentRepository();
        $StudentRepositiry->Remove($Id);
    }
    public function Update($Student, $Id){
        $StudentRepositiry = new StudentRepository();
        $StudentRepositiry->Update($Student, $Id);
    }
}

//Simulacion de las rutas
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['Create'])){
        $student = new Student();
        $student->setName($_POST['NameStudent']);
        $student->setGrupo($_POST['GrupoStudent']);
        $StudentController = new StudentController();
        $StudentController->Add($student);
    }

    else if(isset($_POST['Update'])){
        $student = new Student();
        $student->setName($_POST['NameStudent']);
        $student->setGrupo($_POST['GrupoStudent']);
        $id =  $_POST['IdStudent'];
        $StudentController = new StudentController();
        $StudentController->Update($student, $id);
    }

    else if(isset($_POST['Delete'])){
        $id = ($_POST['IdStudent']);
        $StudentController = new StudentController();
        $StudentController->Remove($id);
    }

    else if(isset($_POST['GetById'])){
        $id = ($_POST['IdStudent']);
        $StudentController = new StudentController();
        $student = $StudentController->GetById($id);
        ?>
            <script>
                console.log("<?php echo $id ?>");
            </script>
        <?php
    }

    else if(isset($_POST['GetAll'])){
        $StudentController = new StudentController();
        $students = $StudentController->Index();
    }

}