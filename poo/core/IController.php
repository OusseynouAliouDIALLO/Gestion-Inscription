<?php 
namespace App\Core;
interface IController{
    public function lister();
    public function ajouter();
    public function supprimer();
    public function modifier();
}