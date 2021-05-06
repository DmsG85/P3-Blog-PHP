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
    protected $postuser = "User_idUser";
    // Users
    protected $userstable = "user";
    protected $iduser = "idUser";
    protected $pseudo = "username";
    protected $email = "email";
    protected $userpassword = "password";
    protected $userStatut = "userStatut";
    protected $userDate = "dateCreation";
    protected $cpassword = "cpassword";
    // Comment 
    protected $commentstable = "comment";
    protected $commentid = "idComment";
    protected $comment = "comment";
    protected $commentDate = "commentDate";
    protected $commentstatut = "statut";
    protected $commentpostid = "Post_idPost";
    protected $commentpostuserid ="Post_User_idUser";
    protected $commentuser = "User_idUser";




}