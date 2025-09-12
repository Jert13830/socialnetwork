<?php

class NewPostController
{
    public function index(){
        
        $_SESSION["active"] = "auto";
        $_SESSION["blur"] = 0;
        $_SESSION["hidePost"] = "none";

        if (isset($_POST["newPostTitle"]) && $_POST["newPostTitle"] !=null && !isset($_POST["btnCancelPost"])) {
            $title = htmlspecialchars($_POST["newPostTitle"]);
            $content = htmlspecialchars($_POST["newPostContent"]);
            $date = date('Y-m-d H:i:s');
            $userId =htmlspecialchars($_SESSION["userValid"]["id"]);

             Post::addPost($title,$content,$date,$userId);

             unset ($_POST["newPostTitle"]);
        }
       

        header("Location: ./userSpace");
     }

}

?>