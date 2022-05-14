<?php
namespace App\Models;
Class Professeur extends User{
    private string $grade;
    private string $nomComplet;

     private Adresse $adresse;
     public function __construct()
     {
         parent::$role="ROLE_PROFESSEUR";
         $this->adresse=new Adresse;
     }

    //One to Many avec cours
    public function cours():array{
        return [];
    }
    public function adresse():Adresse{
        return new Adresse();
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

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}