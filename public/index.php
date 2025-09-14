<?php 

if(!isset($_SESSION)){
    // Start the session
        session_start();
        //Do not display error
    
}

if (!isset($_SESSION["displayError"])) {
    $_SESSION["displayError"] = "none";
    $_SESSION["active"] = "auto";
    $_SESSION["blur"] = 0;
    $_SESSION["hidePost"] = "none";
    $_SESSION["edit"] = false;
    $_SESSION["postEdit"] = false;
}

require_once '../core/Router.php';

require_once '../src/controllers/MainController.php';
require_once '../src/controllers/CreateUserController.php';
require_once '../src/controllers/ErrorController.php';
require_once '../src/controllers/SaveUserController.php';
require_once '../src/controllers/CheckUserController.php';
require_once '../src/controllers/UserSpaceController.php';
require_once '../src/controllers/SignoutUserController.php';
require_once '../src/controllers/DeletePostController.php';
require_once '../src/controllers/EditPostController.php';
require_once '../src/controllers/PostController.php';
require_once '../src/controllers/NewPostController.php';

require_once "../src/models/Db.php";
require_once "../src/models/repositories/UserRepository.php";
require_once "../src/models/repositories/PostRepository.php";

require_once '../src/models/User.php';
require_once '../src/models/Post.php';


$router = new Router();
$router->start();

