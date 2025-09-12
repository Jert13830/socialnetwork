<?php

class NewPostController
{
    public function index(){
        
        $_SESSION["active"] = "auto";
        $_SESSION["blur"] = 0;

        header("Location: ./userSpace");
     }

}

?>