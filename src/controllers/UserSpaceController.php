<?php

class UserSpaceController
{
    public function index(){
            
        if (isset($_SESSION["userValid"]["id"])){
            $_SESSION["posts"] = Post::getUserPosts($_SESSION["userValid"]["id"]);
        }
        include_once '../views/userSpace.php';

        
     }
     

}

?>