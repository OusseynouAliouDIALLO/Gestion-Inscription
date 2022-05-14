<?php
namespace App\Models;
Class Etudiant extends User{
    public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }

    //One to Many avec cours
    public function cours():array{
        return [];
    }

    //One to Many avec inscription
    public function inscription():array{
        return [];
    }
}
