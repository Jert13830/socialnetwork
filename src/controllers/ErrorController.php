<?php

class ErrorController
{
    public function index(){


        if (isset($_POST["btnOK"])){
                
                //USER DOES NOT EXIST!!!
            $_SESSION["displayError"] = "none";
            header("Location: ./");
            exit;

        }

        if (isset($_POST["btnOKi"])){
                
                //USER DOES NOT EXIST!!!
            $_SESSION["displayError"] = "none";
            header("Location: ./createUser");
            exit;

        }
        
     }

}

?>