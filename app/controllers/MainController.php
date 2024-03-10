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
        $template = $this->twig->load('404.twig');
        $data = [
            'title' => '404 Not Found',
            'message' => 'Sorry, the page you are looking for could not be found.'
        ];
    
        echo $template->render($data);
    }
    
}