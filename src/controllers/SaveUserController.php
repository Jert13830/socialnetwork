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

            if (User::checkUserUsername(htmlspecialchars($_POST["userUsername"]))){
            
                $_SESSION["displayError"] = "block";
                $_SESSION["displayErrorMessage"] = "Username already in use";


            }else if (User::checkUserEmail(htmlspecialchars($_POST["userEmail"]))){

               
                  $_SESSION["displayError"] = "block";
                  $_SESSION["displayErrorMessage"] = "Email address already in use";
                 

            }
            else{
                $dob = new DateTime($_POST['userDOB']);
                $user = new User(
                    htmlspecialchars($_POST['userSurname']),
                    htmlspecialchars($_POST['userForename']),
                    $dob,
                    htmlspecialchars($_POST['userEmail']),
                    htmlspecialchars($_POST['userUsername']),
                    password_hash(htmlspecialchars($_POST['userPassword']), PASSWORD_DEFAULT)
                );
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