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
            

            
             if (isset($_SESSION["edit"]) && $_SESSION["edit"] === true) {
               
               $id = htmlspecialchars($_SESSION["postToEdit"]);
         
                Post::updatePost($id,$title,$content,$date,$userId);
             }else{
               
                Post::addPost($title,$content,$date,$userId);
             }
             

             unset ($_POST["newPostTitle"]);
             $_SESSION["edit"] = false;
        }

       if  (isset($_POST["btnCancelPost"])){
            $_SESSION["blur"] = 0;
             $_SESSION["hidePost"] = "none";
            $_SESSION["edit"] = false;

       }
       

        header("Location: ./userSpace");
     }

}

?>