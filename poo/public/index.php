<?php
/**
 *  url:  localhost:8000/uri 
 * uri => uniform ressource identfier => controller/use case
 * controller => classe
 *      use case   uri
 *  --  ajouter => POST  localhost:8000/classe-add    
 *   -- modifier => POST localhost:8000/classe-up
 * --   lister=> GET     localhost:8000/classe
 *   -- supprimer =>  GET    localhost:8000/classe-del
 * Controller => cours
 *      use case
 *  --  ajouter => cours-add
 *   -- modifier => cours-up
 * --   lister=> cours
 *   -- supprimer => cours-del
 */


require_once("../vendor/autoload.php");
require_once('./../core/constantes.php');
require_once('./../core/fonctions.php');

use App\Controllers\SecuriteController;
use App\Controllers\ClasseController;
use App\Core\Router;
use App\Exceptions\RouteNotFoundException;

$router=new Router();

//Enregister une route  : uri associe a un Controller et une action

//$router->route("uri",[controller,action]);

$router->route("/",[SecuriteController::class,"connexion"]);
$router->route("/logout",[SecuriteController::class,"deconnexion"]);
$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);

try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
   die($ex->message);
}


// Une variable d'une classe
//Manipuler un Objet=>
//1-charger le fichier qui contient la classe
//require_once("../models/User.php");
//require_once("../models/RP.php");
//2-Instancier l'objet
//$user=new User();// fonction qui s'appelle le constructeur => __construct()
//Donner un etat a l'objet=> donnez une valeur a ses attributs
//-> Operateur de portee d'instance
//$user-> : interface de la classe(Ensemble des methodes ou attributs publics )
//$user->setId(1);

//$cours=new Cours();

//Autoloading => Chargement automatique
 //Namespace => Packadge : ensemble de classe du meme domaine
 //Namespace repertoire virtuel utiliser pour ranger nos classes
   //namespace Model => ranger mes classes Models
   //namespace Controllers => ranger mes classes controllers
   //namespace Core(Configuration,Toutes les Classes Reutilisables)
//Composer : Gestionnaires de Dependances
    //Gestionnaire => Telecharger + Configurer une dependance dans votre projet
    //Dependance => dossier core est une dependance(classes reutilisables) 
        //https://packagist.org/
        //Hub de dependance =>site beaucoup de dependance suivant le langage

/* use App\Models\Module;
use App\Models\RP;
use App\Core\Request;
use App\Core\DataBase;
use App\Exceptions\BdConnexionException;
use App\Controllers\ClasseController;




$rp =new RP(); */
/* use App\Models\RP;
$rp =new RP();
$rp->setLogin("rp3");
$rp->setPassword("rp");
$rp->insert();
echo "<pre>";
RP::selectAll();
var_dump(RP::selectById(1));
echo "</pre>"; */


  
    





