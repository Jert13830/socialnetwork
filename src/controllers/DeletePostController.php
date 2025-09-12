<?php

class DeletePostController
{
    public function index(){
        
        if (isset($_POST['delPost'])){
            $id = htmlspecialchars($_POST['delPost']);
            Post::deletePost($id);
        }

       header("Location: ./userSpace"); //Go to user space
     }

}

?>