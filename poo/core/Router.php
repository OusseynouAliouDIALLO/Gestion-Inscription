<?php 
namespace App\Core;


/**
 * Surcharge => ajouter un nouveau comportement a une methode
 * Couteau => couper
 *         => tartiner
 *         => devisser 
 *         =>tuer
 * Php, la surchage arguments par defaut 
 *  function somme(int|float $a, int|float $b,$c=0){
 *    return $a+$b+$c;
 * }
 * somme(2,5)//2+5+0
 * somme(2,5,15)//2+5+15
 * somme(2.5,5)
 * somme(2,5.5)
 * somme(2.5,5.5,15)
 * //Constructeur => instancie Objet,Creer l'objet
 * function __construct(){
 * }
 * //Setters=>modifier la valeur d'un attribut les attributs
 * //Constructeur + setters
 *  function __construct($a=null,$x=null){
 *  }
 * 
 * //
 */
use App\Exceptions\RouteNotFoundException;

class Router {
  private Request $request;
  private array $routes=[];
  public function __construct()
  {
      $this->request=new Request;
  }

  public function route(string $uri,array $route){
    $this->routes[$uri]=$route;
  }

  public function resolve(){
     $uri= "/".$this->request->getUri();
     if(isset( $this->routes[$uri])){
         //Destrtruction
        [$ctrlClass,$action] =$this->routes[$uri];
       /**
        * $ctrl=$this->routes[$uri][0]
        * $action=$this->routes[$uri][1]
        */
        if(class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
             //surcharger le controller
              $ctrl=new $ctrlClass($this->request);
              //Injection Objet request dans une action
              call_user_func_array([$ctrl,$action],[$this->request]);
        }else{
              throw new RouteNotFoundException();   
        }
     }else{
         //Soulever l'exception
         throw new RouteNotFoundException();  
     }
  }
    

}