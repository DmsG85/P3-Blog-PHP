<?php

/**
* Configuration
*/

abstract class Config { 
    //Database
	protected $hostname = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "myblog";
    //Post
	protected $poststable = "post";
    protected $postid = "idPost";
    protected $poststatut = "statut";
    protected $postname = "title";
    protected $postdesc = "description";
    protected $chapo = "chapo";
    protected $postpicture = "picture";
    protected $postdate = "dateCreation";
    protected $postupdate = "dateUpdate";
    // Users
    protected $postuser = "User_idUser";
    protected $email = "email";
    protected $userpassword = "password";
    protected $userStatut = "userStatut";
    protected $userDate = "userDate";
    protected $userstable = "user";
    protected $iduser = "idUser";
    protected $cpassword = "cpassword";
    // Comment 
    protected $idComment = "userComment";
    protected $comment = "comment";
    protected $commentDate = "commentDate";

}