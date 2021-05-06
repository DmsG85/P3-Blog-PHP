<?php

require_once './model/Posts.php';
require_once 'controllerConnexion.php';
require_once './model/Users.php';
require_once './model/Comments.php'; 

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
        // var_dump($url);
        if (count($url) < 3) {
            $this->home($url);
        } else {
            switch ($url[2]) {
                case '' :
                    $this->home($url,$qs);
                    break;
                case 'accueil' :
                    $this->home($url,$qs);
                    break;
                case 'admin' :
                    $this->admin($url,$qs);
                    break;
                case 'login' :
                     $this->login($url,$qs);
                    break;
                case 'logout' :
                    $this->logout($url,$qs);
                    break;
                case 'register' :
                    $this->register($url,$qs);
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

    private function admin($url, $qs)
    {
        if (!isset($_SESSION['user']) || $_SESSION["isAdmin"] !== true) {
            header("Location: ".$this->rewritebase);
            exit();
        }
        if (!array_key_exists(3,$url)) {
            $this->adminView($url);
        } else {
            switch ($url[3]) { 
                case 'postList' :
                    $this->adminPostList($url);
                    break;
                case 'postEdit' :
                    $this->adminPostEdit($url);
                    break;
                case 'postDelete' :
                    $this->adminPostDelete($url);
                    break;
                case 'commentList' :
                    $this->adminCommentList($url);
                    break;
                case 'commentEnable' :
                    $this->adminCommentEnable($url);
                    break;
                case 'commentDelete' :
                    $this->adminCommentDelete($url);
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
        exit();
    }

    protected function sendContactMe($url)
    {
        $baseMessage = "Message de ".$_POST['name']." (".$_POST['email'].")\n\n";
        var_dump('dmsgaelle@gmail.com','[BLOG] CONTACT - '.$_POST['subject'], $baseMessage.$_POST['message']);
        // mail('dmsgaelle@gmail.com','[BLOG] CONTACT - '.$_POST['subject'], $baseMessage.$_POST['message']);

        header("Location: ".$this->rewritebase);
        exit();
    }

    protected function home($url)
    {
        // $connexion= new controllerConnexion();
        $title = "Gaëlle Dumas";
        $description = "Accueil";
        $view = 'home';
        // $value=$connexion->contact();
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
        $login = $connexion->loginuser();
        $title = "Connexion";
        if (is_bool($login) && $login == true) {
            header('Location: '.$this->rewritebase);
        }
        $error = $login;
        $description = "Connexion";
        $view = 'login';

        // var_dump ($_SESSION["login"]);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function logout()
    {
        $connexion= new controllerConnexion();
        $login = $connexion->logoutuser();

        header('Location: '.$this->rewritebase);
        exit; 
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
        // var_dump($post);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }
    protected function register()
    {   
        if (isset($_POST["register"])) {
            $connexion= new controllerConnexion();
            $error = $connexion->inscription();
            if (is_numeric($error)) {
                header('Location: '.$this->rewritebase.'login');
                exit();
            }
        }
        $title = "Inscription";
        $description = "Inscription";
        $view = 'register';
        // var_dump(isset($error) ?? $error, $_POST["register"]);
        require_once 'includes/header.php';
        require_once 'view/'.$view.'.php';
        require_once 'includes/footer.php';
    }

    protected function PostView($url)
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


    // ADMIN VIEW
    protected function adminPostList()
    {
        $title = "Section Admin";
        $description = "Section Admin";
        $view = 'postListView';
        $postDB = new Post;
        $userDB = new Users;
        $posts = $postDB->get_posts() ?? array();
        foreach ($posts as $key => $post) {            
            $posts[$key]['user'] = $userDB->get_user($post['User_idUser']);
        }

        /*
        $commentDB = new Comment();
        $userDB = new User();

        foreach ($return as $post) {
            $post['comments'] = $commentDB->get_comment_by_postid($post[$commentDB->postid]);
            $post['user'] = $userDB->getUser($post[$userDB->postuser]);
        }
        */
           
        require_once 'includes/headerAdmin.php';
        require_once 'view/admin/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
        
    }

    protected function adminPostEdit($url)
    {
        $title = "Editer/Modifier";
        $description = "Editer/Modifier";
        $view = 'postEditView';
        $postDB = new Post;

        if (array_key_exists(4, $url)) {
            $post = $postDB->get_post($url[4]);
        }

        if (isset($_POST["submit"])) {
            if (isset($post)) {
                $status = $postDB->update_post($_POST["id"],null,$_POST["title"],$_POST["content"],$_POST["chapo"]);
            } else {
                $status = $postDB->add_post(null,$_POST["title"],$_POST["content"],$_POST["chapo"]);
            }
            if ($status == null) {
                $error = "Une erreur est survenue lors de la sauvegarde du Post.";
            } else {
                header("Location: ".$this->rewritebase."\admin\postList");
                exit();
            }
        }

        require_once 'includes/headerAdmin.php';
        require_once 'view/admin/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
    }

    protected function adminCommentList()
    {
        $title = "Commentaires";
        $description = "Commentaires";
        $view = 'commentListView';
        $comment = new Comment;
        $commentsView = $comment->get_comments();

        // var_dump($commentsView);die;
        require_once 'includes/headerAdmin.php';
        require_once 'view/admin/'.$view.'.php';
        require_once 'includes/footerAdmin.php';
    }

    protected function adminCommentEnable($url)
    {
        $commentDB = new Comment;
        
        if (array_key_exists(4, $url) && $commentDB->get_comment($url[4]) !== null) {
            $commentDB->enable_comment($url[4]);
        }

        header("Location: ".$this->rewritebase."\admin\commentList");
        exit();
    }

    protected function adminCommentDelete($url)
    {
        $commentDB = new Comment;
        
        if (array_key_exists(4, $url) && $commentDB->get_comment($url[4]) !== null) {
            $commentDB->delete_comment($url[4]);
        }

        header("Location: ".$this->rewritebase."\admin\commentList");
        exit();
    }

    protected function adminPostDelete($url)
    {
        $postDB = new Post;

        if (array_key_exists(4, $url) && $postDB->get_post($url[4]) !== null) {
            $postDB->delete_post($url[4]);
        }

        header("Location: ".$this->rewritebase."\admin\postList");
        exit();
    }
}


