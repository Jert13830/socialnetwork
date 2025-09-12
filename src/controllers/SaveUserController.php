<?php

class SaveUserController
{
    public function index(){


        if (isset($_POST["btnOK"])){
            $_SESSION["displayError"] = "none";
        }

        if (isset($_POST["btnSaveUser"])){
            
            $dob = new DateTime($_POST['userDOB']);
                
            $user = new User($_POST['userSurname'],$_POST['userForename'],$dob,$_POST['userEmail'],$_POST['userUsername'],password_hash($_POST['userPassword'],PASSWORD_DEFAULT));

            User::createUser($user);

            header("Location: ./");
            exit;
           
            }else{
                header("Location: ./");
                exit;
            }
    
        
     }

}

?>