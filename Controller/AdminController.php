<?php

require_once './model/Post.php';
require_once 'ConnexionController.php';
require_once './model/Users.php';
require_once './model/Comment.php'; 

/**
* AdminController
*/
class AdminController
{
    public $rewritebase;
    
    public $author;
    public $userIsAdmin;
    public $connectedUser;

    function __construct($rewritebase, $author, $userIsAdmin, $connectedUser)
    {
        $this->rewritebase = $rewritebase;
        $this->author = $author;
        $this->userIsAdmin = $userIsAdmin;
        $this->connectedUser = $connectedUser;
    }

    public function admin($url, $qs)
    {
        if (!isset($_SESSION['user']) || $_SESSION["isAdmin"] !== true) {
            header("Location: ".$this->rewritebase);
            die();
        }
        if (!array_key_exists(3, $url)) {
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
                    $baseController = new Controller($url, $qs);
                    $baseController->notFound();
                    break;
            }
        }
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
                die();
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
        die();
    }

    protected function adminCommentDelete($url)
    {
        $commentDB = new Comment;
        
        if (array_key_exists(4, $url) && $commentDB->get_comment($url[4]) !== null) {
            $commentDB->delete_comment($url[4]);
        }

        header("Location: ".$this->rewritebase."\admin\commentList");
        die();
    }

    protected function adminPostDelete($url)
    {
        $postDB = new Post;

        if (array_key_exists(4, $url) && $postDB->get_post($url[4]) !== null) {
            $postDB->delete_post($url[4]);
        }

        header("Location: ".$this->rewritebase."\admin\postList");
        die();
    }
}


