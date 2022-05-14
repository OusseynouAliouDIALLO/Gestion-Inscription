<?php
namespace App\Models;
Class Inscription{
    private int $id;
    private string $dateInscrip;
    private string $dateFinInscrip;

    //Many to One vace classe
    public function classe():Classe{
        return new Classe();
    }

    //Many to One avec etudiant
    public function etudiant():Etudiant{
        return new Etudiant();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateInscrip
     */ 
    public function getDateInscrip()
    {
        return $this->dateInscrip;
    }

    /**
     * Set the value of dateInscrip
     *
     * @return  self
     */ 
    public function setDateInscrip($dateInscrip)
    {
        $this->dateInscrip = $dateInscrip;

        return $this;
    }

    /**
     * Get the value of dateFinInscrip
     */ 
    public function getDateFinInscrip()
    {
        return $this->dateFinInscrip;
    }

    /**
     * Set the value of dateFinInscrip
     *
     * @return  self
     */ 
    public function setDateFinInscrip($dateFinInscrip)
    {
        $this->dateFinInscrip = $dateFinInscrip;

        return $this;
    }
}