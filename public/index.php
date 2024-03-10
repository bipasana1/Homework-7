<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";
use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = $_SERVER["REQUEST_URI"];


// Instantiate controllers
$mainController = new MainController();
$userController = new UserController();
$postController = new PostController();

switch ($url) {
    case "/posts":
        // Call the method to return an array of posts via the post controller
        $postController->showPosts();
        break;
    case "/users":
        // Return the index view from the user controller
        $userController->index();
        break;
    case "/":
        // Return the homepage view from the main controller
        $mainController->homepage();
        break;
    default:
        // Return a 404 view from the main controller
        $mainController->notFound();
        break;
}
?>