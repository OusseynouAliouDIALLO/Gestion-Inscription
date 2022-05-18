<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class SecuriteController extends Controller{
    
    public function connexion(){
        //Formulaire
          //1-Affichage du Formulaire => GET
             //request
         //2-Soumission des donnees  => POST
         if( $this->request->isGet()){       
              $this->render("securite/login");
         }
         if( $this->request->isPost()){
            dd(" Soumission des donneesdu Formulaire"); 
         }
         
    }

    public function deconnexion(){

         $this->redirectToRoute("");
    }
}