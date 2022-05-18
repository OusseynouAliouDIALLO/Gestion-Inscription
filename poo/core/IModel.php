<?php 
namespace App\Core;
interface IModel{

    public function insert();
    public function update();
    public static function delete(int $id);
    public static  function selectAll();
    public static  function selectById(int $id);
    public static  function selectWhere(string $sql,array $data=[],$single=false);
    //select * from classe where niveau like 'L1'
    //select * from user where login like 'douve' and password like 'douve'

  //Methodes instances  =>s'applique sur un objet et utilise l'etat de l'objet
  /**
   *   $classe=new Classe()
   *   $classe->setLibelle('L2 GLRS')
   *   $classe->insert()  //insert into classe (libelle) values('L2 GLRS')
   *   $classe->setId(1)
   *   $classe->delete()  //delete from classe where id=1
   */


  //Methodes statiques(static) =>s'applique sur une classe et n'utilise l'etat d'un objet
    /**
     *   Classe::methode()
     *   Classe::delete(1)
     *   Classe::selectAll():select * from classe
    */

}