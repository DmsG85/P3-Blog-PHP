<?php

require_once './model/Posts.php';
require_once 'controllerConnexion.php';
require_once './model/Users.php';
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
        // var_dump($url);
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
            case 'adminView' :
                $this->adminView($url);
                break;
            case 'editView' :
                $this->editView($url);
                break;
            case 'commentsView' :
                $this->commentsView($url);
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
        $connexion= new controllerConnexion();
        $login = $connexion-> loginuser();
        $title = "Connexion";
        $error = $login;
        $description = "Connexion";
        $view = 'login';
        // var_dump ($_SESSION["login"]);
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
        // var_dump($post);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function register()
    {   
        
        $connexion= new controllerConnexion();
        $value=$connexion->inscription();
        $title = "Inscription";
        $description = "Inscription";
        $view = 'register';
        // var_dump($value);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function postView($url)
    {
        $title = "Article";
        $description = "Article";
        $view = 'postView';
        $post = new Post;
        $actu = $post->get_post($url[3]);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function adminView()
    {
        $title = "Section Admin";
        $description = "Section Admin";
        $view = 'adminView';
       
        require_once 'includes/headerAdmin.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
        
    }
    protected function editView()
    {
        $title = "Editer/Modifier";
        $description = "Editer/Modifier";
        $view = 'editView';
        require_once 'includes/headerAdmin.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
        
    }
    protected function commentsView()
    {
        $title = "Commentaires";
        $description = "Commentaires";
        $view = 'commentsView';
        require_once 'includes/headerAdmin.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
        
    }
}


