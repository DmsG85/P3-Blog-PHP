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
    

    

}
