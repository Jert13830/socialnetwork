<?php

class EditPostController
{
    public function index(){
        
        $_SESSION["active"] = "none";
        $_SESSION["blur"] = 2;
        $_SESSION["hidePost"] = "block";
       

        if (isset($_POST["editPost"])){
            $_SESSION["edit"] = true;
            $_SESSION["postToEdit"] = $_POST["newPostIdEdit"]; //Index in the Post table, for updating table
            $_SESSION["editPost"] = $_POST["editPost"]; //Index in the array of Posts for editting

        }
           



        header("Location: ./userSpace");
     }

}

?>