<?php

interface ISubjectsRepository
{
    public function GetAll();
    public function GetById($Id);
    public function Add($Subject);
    public function Remove($Id);
    public function Update($Subject, $Id);
}