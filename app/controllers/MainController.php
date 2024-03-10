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
    /* public function notFound() {
        try {
            // Load the 404 error template
            $template = $this->twig->load('404.twig');
            $errorData = [
                'title' => '404 Not Found',
                'message' => 'Sorry, the page you are looking for could not be found.'
            ];
    
            // Render the template
            echo $template->render($errorData);
        } catch (\Exception $e) {
            // Log the exception
            error_log('Error rendering 404 template: ' . $e->getMessage());
            // Return a generic error message
            echo "An error occurred while processing your request. Please try again later.";
        }
    } 
    
    public function notFound() 
    {
        $template = $this->twig->('notFound/notFound.twig');
        http_response_code(404);
        echo $template->render(); 

    } */
    public function notFound() {
        // Ensure that Twig is properly initialized
        if ($this->twig) {
            // Load the 404 error template
            $template = $this->twig->load('notFound/notFound.twig');
            
            // Check if the template was loaded successfully
            if ($template) {
                // Set the HTTP response code to 404
                http_response_code(404);
                
                // Render the template
                echo $template->render();
            } else {
                // If the template could not be loaded, echo an error message
                echo "Error: 404 template not found";
            }
        } else {
            // If Twig is not initialized, echo an error message
            echo "Error: Twig environment not initialized";
        }
    }
      
    
}