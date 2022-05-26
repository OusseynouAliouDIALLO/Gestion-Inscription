<?php 
namespace App\Core;
class Controller{
    protected Request $request;
    protected string $layout="base";
    public function __construct(Request $request)
    {
        $this->request= $request;
    }

    public function redirectToRoute(string $uri){
        $url=WEB_URL."".$uri;
        header("location:$url");
    }

    public function render(string $path){
      ob_start();
        require_once(ROOT."views/".$path.".html.php");
          $content_for_views=ob_get_clean();
        require_once(ROOT."views/layout/".$this->layout.".html.php");
    }


}