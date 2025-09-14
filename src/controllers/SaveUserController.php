<?php

class SaveUserController
{
    public function index(){


        if (isset($_POST["btnOKi"])){
            $_SESSION["displayError"] = "none";
        }

        if(isset($_POST["btnCancelUser"])){
            header("Location: ./");
            exit;
        }

        if (isset($_POST["btnSaveUser"]) && !isset($_POST["btnCancelUser"])){

            if (User::checkUserUsername($_POST["userUsername"])){
            
                $_SESSION["displayError"] = "block";
                $_SESSION["displayErrorMessage"] = "Username already in use";


            }else if (User::checkUserEmail($_POST["userEmail"])){

               
                  $_SESSION["displayError"] = "block";
                  $_SESSION["displayErrorMessage"] = "Email address already in use";
                 

            }
            else{
                $dob = new DateTime($_POST['userDOB']);
                $user = new User($_POST['userSurname'],$_POST['userForename'],$dob,$_POST['userEmail'],$_POST['userUsername'],password_hash($_POST['userPassword'],PASSWORD_DEFAULT));
                User::createUser($user);

                 header("Location: ./");
                 exit;
            }
           
           
        }
            
            header("Location: ./createUser");
            exit;
    
    
        
     }

}

?>