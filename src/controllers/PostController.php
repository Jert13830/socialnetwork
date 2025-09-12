<?php

class PostController
{
    public function index(){
        
        
        $_SESSION["active"] = "none";
        $_SESSION["blur"] = 2;
        $_SESSION["hidePost"] = "block";

        header("Location: ./userSpace");
     }

}

?>