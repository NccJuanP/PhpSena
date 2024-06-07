<?php

include(__DIR__ . '/../../Data/DbContext.php');
include(__DIR__ . '/../../Models/Subject.php');
include("ISubjectsRepository.php");

class SubjectsRepository implements ISubjectsRepository
{
/*     public function __construct(){
        $db = new DbContext();
        $this->conn = $db->DbSet(); 
    } */
    public function Add($Subject)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("INSERT INTO Subjects (Name, Description) VALUES (?, ?)");
        $name = $Subject->getName();
        $description = $Subject->getDescription();
        $stmt->bind_param("ss", $name,  $description);

        if ($stmt->execute()) {
            echo "Los Datos se han guardado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }

    public function GetAll()
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("SELECT * FROM Subjects");
        $stmt->execute();
        $result = $stmt->get_result();
        $Subjects = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $Subject = new Subject();
                $Subject->setId($row['Id']);
                $Subject->setName($row['Name']);
                $Subject->setDescription($row['Description']);
                array_push($Subjects, $Subject);
            }
            return $Subjects;
        } else {
            echo "No se ha encontrado ningún registro.";
        }
        $stmt->close();
        $conn->close();
    }

    public function GetById($Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("SELECT * FROM Subjects WHERE Id =?");
        $stmt->bind_param("i", $Id);
        $stmt->execute();
        $result = $stmt->get_result();
        $subject = new Subject();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $subject->setId($row['Id']);
            $subject->setName($row['Name']);
            $subject->setDescription($row['Description']);
        } else {
            echo "No se ha encontrado ningún registro.";
        }
        $stmt->close();
        $conn->close();
        return $subject;
    }

    public function Remove($Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt =  $conn->prepare("DELETE FROM `Subjects` WHERE Id = ?");
        $stmt->bind_param("i", $Id);

        if ($stmt->execute()) {
            echo "Los Datos se han Eliminado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }

    public function Update($Subject, $Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("UPDATE Subjects SET Name =?, Description =? WHERE Id =?");
        $name = $Subject->getName();
        $description = $Subject->getDescription();
        $id = $Subject->getId();
        $stmt->bind_param("ssi", $name, $description, $id);
        if ($stmt->execute()) {
            echo "Los Datos se han actualizado exitosamente";
        } else {
            echo "Error en los datos: ". $stmt->error;
        }
        $stmt->close();
        $conn->close();
        
    }
}
