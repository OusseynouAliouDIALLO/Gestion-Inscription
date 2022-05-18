<?php 
namespace App\Core;
class Controller{
    protected Request $request;
    public function __construct(Request $request)
    {
        $this->request= $request;
    }

    public function redirectToRoute(string $uri){
        $url=WEB_URL."".$uri;
        header("location:$url");
    }

    public function render(string $path){
        require_once(ROOT."views/".$path.".html.php");
    }


}