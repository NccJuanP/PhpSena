<?php

include("IStudentsRepository.php");
include(__DIR__ . '/../../Data/DbContext.php');
include(__DIR__ . '/../../Models/Student.php');
class StudentRepository implements IStudentsRepository
{
    public function Add($Student)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("INSERT INTO Students (Name, Grupo) VALUES (?, ?)");
        $name = $Student->getName();
        $grupo = $Student->getGrupo();
        $stmt->bind_param("ss", $name,  $grupo);

        if ($stmt->execute()) {
            echo "Los Datos se han guardado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    }

    public function GetAll()
    {
        $db = new DbContext();
        $conn = $db->DbSet(); 
        // Implement the GetAll method here
        $stmt = $conn->prepare("SELECT * FROM Students");
        $stmt->execute();
        $result = $stmt->get_result();
        $students = array();
        while ($row = $result->fetch_assoc()) {
            $student = new Student();
            $student->setId($row['Id']);
            $student->setName($row['Name']);
            $student->setGrupo($row['Grupo']);
            array_push($students, $student);
        }
        $stmt->close();
        $conn->close();
        return $students;
    }

    public function GetById($Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        // Implement the GetById method here
        $stmt = $conn->prepare("SELECT * FROM Students WHERE Id =?");
        $stmt->bind_param("i", $Id);
        $stmt->execute();
        $result = $stmt->get_result();
        $student = new Student();
        while ($row = $result->fetch_assoc()) {
            $student->setId($row['Id']);
            $student->setName($row['Name']);
            $student->setGrupo($row['Grupo']);
        }
        // Cierra la conexión
        $stmt->close();
        $conn->close();
        return self::GetNotas($Id, $student);;
    }

    public function Remove($Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt =  $conn->prepare("DELETE FROM `Students` WHERE Id = ?");
        $stmt->bind_param("i", $Id);

        if ($stmt->execute()) {
            echo "Los Datos se han Eliminado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    }

    public function Update($Student, $Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("UPDATE Students SET Name =?, Grupo =? WHERE Id =?");
        $name = $Student->getName();
        $grupo = $Student->getGrupo();
        $stmt->bind_param("ssi", $name, $grupo, $Id);

        if ($stmt->execute()) {
            echo "Los Datos se han Actualizado exitosamente";
        } else {
            echo "Error en los datos: ". $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $conn->close();
    }

    public function GetNotas($id, $student) {
        $db = new DbContext();
        $conn = $db->DbSet();
        
        // Preparar la consulta con JOIN para obtener los nombres de las materias
        $stmt = $conn->prepare("SELECT
        q.*,
        s.Name
    FROM
        Qualifications q
    JOIN Subjects s ON
        q.IdSubject = s.Id
    WHERE
        q.IdStudent = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        while ($row = $result->fetch_object()) {
            // Aquí puedes almacenar las notas y el nombre de la materia en el objeto student
            // Supongamos que el método setNotas del objeto student puede recibir el nombre de la materia
            $student->setNotas($row);
        }
        
        // Cierra la conexión
        $stmt->close();
        $conn->close();
        
        return $student;
    }
    
}
