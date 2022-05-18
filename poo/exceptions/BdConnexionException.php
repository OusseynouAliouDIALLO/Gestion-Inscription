<?php 
namespace App\Exceptions;
class BdConnexionException extends \PDOException{
    public $message="Erreur Connexion -Veuillez contacter votre Admin";

}