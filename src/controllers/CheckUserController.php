<?php

class CheckUserController
{
    public function index(){


        if (isset($_POST["loginUser"])){
                
            $userValid = User::checkUserLogin($_POST[htmlspecialchars('loginName')]);

            if ($userValid != null && password_verify(htmlspecialchars($_POST["loginPassword"]),$userValid["pword"])){

                 $_SESSION["userValid"] = $userValid; //set the session valid user
                 header("Location: ./userSpace");
                exit;
            }

        }
        
        //USER DOES NOT EXIST!!!
        $_SESSION["displayError"] = "block";
        header("Location: ./");
        exit;
    
      
        
            
    
        
     }

}

?>