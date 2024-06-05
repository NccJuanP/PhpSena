<?php

include_once ("../Data/DbContext.php");
include("IStudentsRepository.php");

class StudentRepository implements IStudentsRepository
{
    
    private $conn;

    public function __construct(){
        $db = new DbContext();
        $this->conn = $db->DbSet(); 
    }
    public function Add($Student)
    {
        $stmt = $this->conn->prepare("INSERT INTO Students (Name, Grupo) VALUES (?, ?)");
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
        $stmt =  $this->conn->prepare("DELETE FROM `Students` WHERE Id = ?");
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
