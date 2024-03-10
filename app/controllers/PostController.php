<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Post; // Assuming this is the namespace for the Post model

class PostController extends Controller
{
    /**
     * Method to return some posts.
     */
    public function getPosts()
    {
        // Example: Fetch posts from the Post model
        $posts = Post::getAllPosts(); // Assuming you have a method like this in your Post model
        
        // Render Twig template to display posts
        $template = $this->twig->load('posts.twig');
        echo $template->render(['posts' => $posts]);
    }
}
