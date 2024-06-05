<?php

include_once ("../Data/DbContext.php");
include("ISubjectsRepository.php");

class SubjectsRepository implements ISubjectsRepository
{
    
    private $conn;

    public function __construct(){
        $db = new DbContext();
        $this->conn = $db->DbSet(); 
    }
    public function Add($Subject)
    {
        $stmt = $this->conn->prepare("INSERT INTO Subjects (Name, Description) VALUES (?, ?)");
        $name = $Subject->getName();
        $description = $Subject->getDescription();
        $stmt->bind_param("ss", $name,  $description);

        if ($stmt->execute()) {
            echo "Los Datos se han guardado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $this->conn->close();
    }

    public function GetAll()
    {
        // Implement the GetAll method here
    }

    public function GetById($Id)
    {
        // Implement the GetById method here
    }

    public function Remove($Id)
    {
        $stmt =  $this->conn->prepare("DELETE FROM `Subjects` WHERE Id = ?");
        $stmt->bind_param("i", $Id);

        if ($stmt->execute()) {
            echo "Los Datos se han Eliminado exitosamente";
        } else {
            echo "Error en los datos: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
        $this->conn->close();
    }

    public function Update($Student, $Id)
    {
        // Implement the Update method here
    }
}
