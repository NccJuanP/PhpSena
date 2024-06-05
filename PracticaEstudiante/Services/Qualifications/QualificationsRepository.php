<?php

include_once ("../../Data/DbContext.php");
include("IQualificationsRepository.php");

class QualificationsRepository implements IQualificationsRepository
{
    
    private $conn;

    public function __construct(){
        $db = new DbContext();
        $this->conn = $db->DbSet(); 
    }
    public function Add($Qualification)
    {
        $stmt = $this->conn->prepare("INSERT INTO Qualifications (Score, IdStudent, IdSubject) VALUES (?, ?, ?)");
        $Score   = $Qualification->getScore();
        $IdStudent   = $Qualification->getIdStudent();
        $IdSubject = $Qualification->getIdSubject();
        $stmt->bind_param("d,i,i", $Score,  $IdStudent, $IdSubject);

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
        $stmt =  $this->conn->prepare("DELETE FROM `Qualifications` WHERE Id = ?");
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
