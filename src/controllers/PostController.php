<?php

class PostController
{
    public function index(){
        
        $_SESSION["active"] = "none";
        $_SESSION["blur"] = 2;

        header("Location: ./userSpace");
     }

}

?>