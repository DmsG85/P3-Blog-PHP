<?php

require_once './model/Post.php';
require_once 'ConnexionController.php';
require_once 'AdminController.php';
require_once './model/Users.php';
require_once './model/Comment.php';

/**
* Controller
*/
class Controller
{
    public $rewritebase = "/mvc/";
    
    public $author = "Gaëlle Dumas";
    public $userIsAdmin = false;
    public $connectedUser = null;

    function __construct($url="",$qs="")
    {
        $url = explode('/', $url);
        $qs = explode('&', $qs);
        $this->userIsAdmin = isset($_SESSION['isAdmin']) ? $_SESSION['isAdmin'] : false;
        $this->connectedUser = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        
        if (count($url) < 3) {
            $this->home($url);
        } else {
            switch ($url[2]) {
                case '' :
                    $this->home($url, $qs);
                    break;
                case 'accueil' :
                    $this->home($url, $qs);
                    break;
                case 'admin' :
                    $adminController = new AdminController($this->rewritebase, $this->author, $this->userIsAdmin, $this->connectedUser);
                    $adminController->admin($url, $qs);
                    break;
                case 'login' :
                     $this->login($url, $qs);
                    break;
                case 'logout' :
                    $this->logout($url, $qs);
                    break;
                case 'register' :
                    $this->register($url, $qs);
                    break;
                case 'listPosts' :
                    $this->listPosts($url);
                    break;
                case 'postView' :
                    $this->postView($url);
                    break;
                case 'comment' :
                    $this->createComment($url);
                    break;
                case 'contactme' :
                    $this->sendContactMe($url);
                    break;
                default:
                    $this->notFound();
                    break;
            }
        }
    }

    protected function createComment($url)
    {
        $postDB = new Post;
        $commentDB = new Comment;

        if (!array_key_exists(3, $url)) {
            $this->notFound();
            return;
        }

        $post = $postDB->get_post($url[3]);
        if (!isset($post)) {
            $this->notFound();
            return;
        }

        if (isset($_POST["comment"])) {
            $status = $commentDB->add_comment($_POST["comment"], $post, $this->connectedUser);
        }

        header("Location: ".$this->rewritebase."postView\\".$url[3]);
        die();
    }

    protected function sendContactMe($url)
    {
        $baseMessage = "Message de ".$_POST['name']." (".$_POST['email'].")\n\n";
        var_dump('dmsgaelle@gmail.com','[BLOG] CONTACT - '.$_POST['subject'], $baseMessage.$_POST['message']);

        header("Location: ".$this->rewritebase);
        die();
    }

    protected function home($url)
    {
        
        $title = "Gaëlle Dumas";
        $description = "Accueil";
        $view = 'home';
        
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    public function notFound()
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
        $connexion= new ConnexionController();
        $login = $connexion->loginuser();
        $title = "Connexion";
        if (is_bool($login) && $login == true) {
            header('Location: '.$this->rewritebase);
        }
        $error = $login;
        $description = "Connexion";
        $view = 'login';

        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function logout()
    {
        $connexion= new ConnexionController();
        $login = $connexion->logoutuser();

        header('Location: '.$this->rewritebase);
        die;
    }
    
    protected function listPosts()
    {
        $title = "Blog";
        $description = "Blog";
        $view = 'listPosts';
        $post = new Post;
        $userDB = new Users;
        $actus = $post->get_posts(2);
        foreach ($actus as $key => $actu) {
            $actus[$key]['user'] = $userDB->get_user($actu['User_idUser']);
        }
        
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function register()
    {   
        if (isset($_POST["register"])) {
            $connexion = new ConnexionController();
            $error = $connexion->inscription();
            if (is_numeric($error)) {
                header('Location: '.$this->rewritebase.'login');
                die();
            }
        }
        $title = "Inscription";
        $description = "Inscription";
        $view = 'register';
        
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function postView($url)
    {
        $title = "Article";
        $description = "Article";
        $view = 'postView';
        $postDB = new Post;
        $userDB = new Users;
        $commentDB = new Comment;
        $actu = $postDB->get_post($url[3]);
        $actu['user'] = $userDB->get_user($actu['User_idUser']);
        $comments = $commentDB->get_comments_by_postid($actu['idPost']);
        foreach ($comments as $key => $comment) {
            $comments[$key]['user'] = $userDB->get_user($comment['User_idUser']);
        }
        $actu['comments'] = $comments;

        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
}


