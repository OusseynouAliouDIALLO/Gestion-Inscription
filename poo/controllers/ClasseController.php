<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\IController;

class ClasseController extends Controller implements IController{

   
    public function lister(){
       
        $this->render("classe/liste");
    }

    public function ajouter(){
        
    }

    public function supprimer(){
        
    }

    public function modifier(){
        
    }
}