<?php
namespace App\Models; 
use App\Core\Model;
class Cours extends Model{
    private int $id;
    private \DateTime $dateCours;
    private string $heureDebut;
    private string $heureFin;

    // Many to One avec classe
    public function classe():Classe
    {
        return new Classe();
    }

    // Many to One avec etudiant
    public function etudiant():Etudiant
    {
        return new Etudiant();
    }

    //Many to One avec professeur
    public function professeur():Professeur
    {
        return new Professeur();
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
     * Get the value of heureDebut
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get the value of dateCours
     */
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }
}