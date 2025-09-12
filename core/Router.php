<?php

class Router {
    public function start (){
        try {
            $uri = $_SERVER['REQUEST_URI'];
            if ($uri != "/") {

                $instanceContro = ucfirst(explode('/', $uri)[1]."Controller");
                if (class_exists($instanceContro)) {
                    $controller = new $instanceContro();
                    $controller->index();
                }else{
                    echo "404";
                }
            }else{
                $instanceContro = new MainController();
                $instanceContro->index();
            }

        } catch (Exception $e) {
        
            echo $e->getMessage();
            die;
        }
    }
}