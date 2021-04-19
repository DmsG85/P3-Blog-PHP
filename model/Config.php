<?php

/**
* Configuration
*/

abstract class Config { 

	protected $hostname = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "myblog";

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
    protected $email = "email";
    protected $pseudo = "username";
    protected $userpassword = "password";
    protected $userStatut = "userStatut";
    protected $userDate = "userDate";
    protected $userstable = "user";
    protected $iduser = "idUser";

}