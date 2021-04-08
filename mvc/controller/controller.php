<?php

require_once './model/Posts.php';

/**
* Controller
*/
class Controller
{
    public $rewritebase = "/mvc/";
    
    public $author = "Gaëlle Dumas";
    function __construct($url="",$qs="")
    {
        
        
        $url = explode('/', $url);
        $qs = explode('&', $qs);

        switch ($url[2]) {
            case '' :
                $this->home($url);
                break;
            case 'accueil' :
                $this->home($url);
                break;
            case 'admin' :
                $this->admin($url);
                break;
            case 'login' :
                 $this->login($url);
                break;      
            case 'listPosts' :
                $this->listPosts($url);
                break;  
            case 'register' :
                $this->register($url);
                break; 
            case 'postView' :
                $this->postView($url);
                break;              
            default:
                $this->notFound();
                break;
        }

    }

    protected function home($url)
    {
        $title = "Gaëlle Dumas";
        $description = "Accueil";
        $view = 'home';
        // $post = new Post;
        // $actus = $post->get_posts(1);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function notFound()
    {
        $title = "Page introuvable";
        $description = "Page introuvable";
        $view = '404';
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function login()
    {
        $title = "Connexion";
        $description = "Connexion";
        $view = 'login';
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    
    protected function listPosts()
    {
        $title = "Blog";
        $description = "Blog";
        $view = 'listPosts';
        $post = new Post;
        $actus = $post->get_posts(2);
        // var_dump($actus);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function register()
    {
        $title = "Inscription";
        $description = "Inscription";
        $view = 'register';
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function postView()
    {
        $title = "Article";
        $description = "Article";
        $view = 'postView';
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
}