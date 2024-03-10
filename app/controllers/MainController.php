<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }
    public function notFound() {
        try {
            // Load the 404 error template
            $template = $this->twig->load('404.twig');
            $errorData = [
                'title' => '404 Not Found',
            ];
    
            // Render the template
            echo $template->render($errorData);
        } catch (\Exception $e) {
            // Handle any exceptions that occur during template rendering
            echo "Error rendering 404 template: " . $e->getMessage();
        }
    }
    
    
}