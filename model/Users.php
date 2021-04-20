<?php

require_once 'Database.php';

class Users extends Database { 

    function verifemail($email){
        $db = new Database();
        // var_dump($email);
        // $email= $this->testinput($email);
        // var_dump($email);
        $return = $db->select(array($this->userpassword, $this->iduser),array($this->userstable),array($this->email=>"'".$email."'"));
        if ($return!=null){
            $return=$return[0];
        }else{
            $return=null;
        }
        return $return;

    }

    function get_post($id)
    {
        $db = new Database();
        $return = $db->select(array($this->postid, $this->postname, $this->postdesc, $this->postpicture, $this->postdate), array($this->poststable), array($this->postid=>$id));
        return $return;
    }
    function testinput($data){
        $data=trim ($data);
        $data=addslashes ($data);
        $data=htmlspecialchars ($data);
    }
    function inscription($pseudo,$email,$password){
        $db = new Database();
        $return = $db->insert(array($this->email=>$email, $this->pseudo=>$pseudo,$this->userpassword=>$password, $this->userStatut=>1),$this->userstable);
        if ($return==null){
            $return=false;
        }
        return $return;
    }

    function comment($idComment,$comment,$commentDate){
        $db = new Database();
        $return = $db->select(array($this->userComment=>$idComment, $this->comment=>$comment,$this->commentDate=>$commentDate));
        if ($return==null){
            $return=false;
        }
        return $return;
    }
    
}
