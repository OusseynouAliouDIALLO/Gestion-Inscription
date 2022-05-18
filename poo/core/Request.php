<?php 
namespace App\Core;
class Request {
    public function getUrl(){
       return explode("/",$_SERVER['REQUEST_URI']);
    }

    public function getUri(){
        return $this->getUrl()[1]; 
    }

    public function isPost():bool{
        return $_SERVER["REQUEST_METHOD"]=="POST";
    }
    public function isGet():bool{
        return $_SERVER["REQUEST_METHOD"]=="GET";
    }
}