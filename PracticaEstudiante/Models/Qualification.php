<?php

class Qualification {
    private $Id;
    private $Score;
    private $IdStudent;
    private $IdSubject;

/*     public function __construct($Score, $IdStudent, $IdSubject)
    {
        $this->Score = $Score;
        $this->IdStudent = $IdStudent;
        $this->IdSubject = $IdSubject;
    } */

    public function getId() {
        return $this->Id;
    }

    public function getScore() {
        return $this->Score;
    }

    public function getIdStudent() {
        return $this->IdStudent;
    }

    public function getIdSubject(){
        return $this->IdSubject;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setScore($Score) {
        $this->Score = $Score;
    }

    public function setIdStudent($IdStudent) {
        $this->IdStudent = $IdStudent;
    }

    public function setIdSubject($IdSubject) {
        $this->IdSubject = $IdSubject;
    }
}