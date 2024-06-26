<?php

include(__DIR__ . '/../../Data/DbContext.php');
include(__DIR__ . '/../../Models/Qualification.php');

include("IQualificationsRepository.php");

class QualificationsRepository implements IQualificationsRepository
{
    public function Add($Qualification)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("INSERT INTO Qualifications (Score, IdStudent, IdSubject) VALUES (?, ?, ?)");
        
        $Score = floatval($Qualification->getScore());
        $IdStudent = intval($Qualification->getIdStudent());
        $IdSubject = intval($Qualification->getIdSubject());
    
        // La cadena de tipos debe ser "dii" sin comas
        $stmt->bind_param("dii", $Score, $IdStudent, $IdSubject);
    
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
        // Implement the GetAll method here
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("SELECT * FROM Qualifications");
        $stmt->execute();
        $result = $stmt->get_result();
        $Qualifications = array();
        while ($row = $result->fetch_assoc()) {
            $Qualification = new Qualification();
            $Qualification->setId($row['Id']);
            $Qualification->setScore($row['Score']);
            $Qualification->setIdStudent($row['IdStudent']);
            $Qualification->setIdSubject($row['IdSubject']);
            array_push($Qualifications, $Qualification);
        }
        return $Qualifications;
    }

    public function GetById($Id)
    {
        // Implement the GetById method here
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("SELECT * FROM Qualifications WHERE Id =?");
        $stmt->bind_param("i", $Id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $Qualification = new Qualification();
        $Qualification->setId($row['Id']);
        $Qualification->setScore($row['Score']);
        $Qualification->setIdStudent($row['IdStudent']);
        $Qualification->setIdSubject($row['IdSubject']);
        return $Qualification;
    }

    public function Remove($Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt =  $conn->prepare("DELETE FROM `Qualifications` WHERE Id = ?");
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

    public function Update($Qualification, $Id)
    {
        $db = new DbContext();
        $conn = $db->DbSet();
        $stmt = $conn->prepare("UPDATE Qualifications SET Score =?, IdStudent =?, IdSubject =? WHERE Id =?");
        $Score   = floatval($Qualification->getScore());
        $IdStudent   = intval($Qualification->getIdStudent());
        $IdSubject = intval($Qualification->getIdSubject());
        $stmt->bind_param("diii", $Score,  $IdStudent, $IdSubject, $Id);

        if ($stmt->execute()) {
            echo "Los Datos se han Actualizado exitosamente";
        } else {
            echo "Error en los datos: ". $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }

    public function GetByStudentId($id){
         // Implement the GetAll method here
         $db = new DbContext();
         $conn = $db->DbSet();
         $stmt = $conn->prepare("SELECT * FROM Qualifications WHERE IdStudent = ?");
         $stmt->bind_param("i", $id);
         $stmt->execute();
         $result = $stmt->get_result();
         $Qualifications = array();
         while ($row = $result->fetch_assoc()) {
             $Qualification = new Qualification();
             $Qualification->setId($row['Id']);
             $Qualification->setScore($row['Score']);
             $Qualification->setIdStudent($row['IdStudent']);
             $Qualification->setIdSubject($row['IdSubject']);
             array_push($Qualifications, $Qualification);
         }
         return $Qualifications;
    }
}
