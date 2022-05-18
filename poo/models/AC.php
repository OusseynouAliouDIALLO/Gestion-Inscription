<?php 
namespace App\Models;
class RP extends User {
    
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_AC";
        
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}