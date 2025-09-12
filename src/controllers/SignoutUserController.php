<?php

class SignoutUserController
{
    public function index(){
        
        session_unset(); // removes session variables
        session_destroy(); // destroys the session

        //include_once '../views/home.php'; 
         header("Location: ./main"); //Go to login page

     }

}

?>