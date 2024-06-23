<?php

interface IQualificationsRepository
{
    public function GetAll();
    public function GetById($Id);
    public function Add($Qualification);
    public function Remove($Id);
    public function Update($Qualification, $Id);
    public function GetByStudentId($Id);
}