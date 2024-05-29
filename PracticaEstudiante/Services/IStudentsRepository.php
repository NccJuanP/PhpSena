<?php

interface IStudentsRepository
{
    public function GetAll();
    public function GetById($Id);
    public function Add($Student);
    public function Remove($Id);
    public function Update($Student, $Id);
}