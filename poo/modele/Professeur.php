<?php
Class Professeur extends User{
    private string $grade;

    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }

    //One to Many avec cours
    public function cours():array{
        return [];
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}