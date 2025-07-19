<?php
class App
{
    private $controller  = "HomeController";
    private $method      = 'index';

    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'HomeController';
        $URL = explode('/', $URL);
        return $URL; 
    }

    public function loadcontroller()
    {
        $URL = $this->splitURL();

        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        }else{
            
        $filename = "../app/controllers/_404Controller.php";
            require $filename;
            $this->controller = '_404Controller';
        }

        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);

    }
}


